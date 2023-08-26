// script.js
const boxSearch = document.getElementById('box-search');
const searchForm = boxSearch.querySelector('form');
const searchButton = boxSearch.querySelector('button');

boxSearch.addEventListener('mouseenter', () => {
  searchForm.classList.add('expanded');
});

boxSearch.addEventListener('mouseleave', () => {
  searchForm.classList.remove('expanded');
});