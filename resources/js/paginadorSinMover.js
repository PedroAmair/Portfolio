document.addEventListener('DOMContentLoaded', function () {
  // Mantener el comportamiento de scroll al navegar (manual)
  if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
  }

  // Funciones auxiliares
  function getContainer() {
    return document.querySelector('#list-container');
  }

  // Contenedor y claves de almacenamiento
  const container = getContainer();
  const STORAGE_KEY = container ? 'listScrollPos' : 'scrollPos';
  const savedKeyForUrl = function (url) {
    // Clave para guardar la pos de scroll por URL
    return 'ajax-scroll-' + url;
  };

  // Estado inicial (si ya hay contenido cargado por AJAX antes)
  function restoreScrollFromStorage(url) {
    // Si hay scroll para esta URL, restaurarlo
    const key = savedKeyForUrl(url || window.location.pathname);
    const saved = sessionStorage.getItem(key);
    if (container && saved !== null) {
      const pos = parseInt(saved, 10);
      if (!isNaN(pos)) {
        container.scrollTop = pos;
      }
      sessionStorage.removeItem(key);
    } else if (!container && saved !== null) {
      const pos = parseInt(saved, 10);
      if (!isNaN(pos)) {
        window.scrollTo(0, pos);
      }
      sessionStorage.removeItem(key);
    }
  }

  function saveScrollForUrl(url, pos) {
    const key = savedKeyForUrl(url);
    sessionStorage.setItem(key, String(pos));
  }

  // Cargar contenido de una página vía AJAX y actualizar el contenedor
  function loadPage(url, pushState) {
    // Antes de cargar, guardar la posición actual
    if (container) {
      saveScrollForUrl(url, container.scrollTop);
    } else {
      saveScrollForUrl(url, window.scrollY);
    }

    fetch(url, {
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      }
    })
      .then(function (response) {
        if (!response.ok) throw new Error('Error al cargar la página');
        return response.text();
      })
      .then(function (html) {
        // Extraer el contenido de #list-container de la respuesta
        // Asumimos que la respuesta contiene un elemento con id="list-container"
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        const newContainer = doc.querySelector('#list-container');
        if (newContainer && container) {
          container.innerHTML = newContainer.innerHTML;
        } else if (newContainer && !container) {
          // Si no tenías el contenedor, insertarlo
          const parent = document.body;
          const wrapper = document.createElement('div');
          wrapper.id = 'list-container';
          wrapper.innerHTML = newContainer.innerHTML;
          parent.appendChild(wrapper);
        }

        // Actualizar el título si se suministrara (opcional)
        const newTitle = doc.querySelector('title');
        if (newTitle && newTitle.textContent) {
          document.title = newTitle.textContent;
        }

        // Actualizar historial
        if (pushState) {
          history.pushState({ url: url }, '', url);
        }

        // Restaurar scroll para la nueva vista
        restoreScrollFromStorage(url);
      })
      .catch(function (err) {
        console.error(err);
        // Opcional: fallback a cargar la página completa
        window.location.href = url;
      });
  }

  // Interceptar enlaces con ?page=
  document.querySelectorAll('a[href^="?page="]').forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelectorAll('a[href^="?page="]').forEach(function (l) {
        l.classList.remove('paginacion-activa');
      });
      e.currentTarget.classList.add('paginacion-activa');
      const url = link.getAttribute('href');
      // Cargar la página por AJAX y actualizar el historial
      loadPage(url, true);
    });
  });

  // Manejar botones/links que ya existan tras el primer carga (dinámicos)
  // Reemplazar listeners si se añaden más enlaces después de la carga
  function delegateLinks() {
    document.querySelectorAll('a[href^="?page="]').forEach(function (link) {
      if (!link.dataset.ajaxBound) {
        link.addEventListener('click', function (e) {
          e.preventDefault();
          const url = link.getAttribute('href');
          loadPage(url, true);
        });
        link.dataset.ajaxBound = '1';
      }
    });
  }

  // Llamar a delegateLinks cada vez que el DOM cambie de forma dinámica si aplica
  // (opcional, depende de tu implementación)

  // Manejar navegación del forward/backward del navegador
  window.addEventListener('popstate', function (event) {
    const url = (event.state && event.state.url) ? event.state.url : window.location.href;
    // Cargar la vista almacenada en la URL sin empujar otro estado
    loadPage(url, false);
  });

  // Restaurar scroll al cargar la página por primera vez
  // Si ya hay una vista cargada por AJAX en el HTML, restaurar su scroll
  (function initialRestore() {
    const currentUrl = window.location.href;
    // Intentar restaurar desde la sesión para la URL actual
    restoreScrollFromStorage(currentUrl);
  })();
});
