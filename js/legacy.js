(() => {
    const target = document.querySelector('link[rel="canonical"]');
    if (!target) return;
    const address = new URL(target.href);
    address.search = window.location.search;
    address.hash = window.location.hash;
    window.location.replace(address.href);
})();
