const tabs = document.querySelectorAll('[data-tab-target]');
const tabContents = document.querySelectorAll('[data-tab-content');
const leftnav = document.getElementById('left-nav');
const prod = document.getElementById('content-product');

tabs.forEach( tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget);
        tabContents.forEach(tabContent => {
            tabContent.classList.remove('active');
        })
        tabs.forEach(tab => {
            tab.classList.remove('active');
        })
        if(target == prod) {
            leftnav.classList.add('hide');
        } else {
            leftnav.classList.remove('hide');
        }
        tab.classList.add('active');
        target.classList.add('active');
    })
})