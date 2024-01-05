const tabs = document.querySelectorAll('[data-tab-target]');
const tabContents = document.querySelectorAll('[data-tab-content');
const leftnav = document.getElementById('left-nav');
const prod = document.getElementById('content-product');
const log = document.getElementById('content-login');
const reg = document.getElementById('content-register');

tabs.forEach( tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget);
        tabContents.forEach(tabContent => {
            tabContent.classList.remove('active');
        })
        tabs.forEach(tab => {
            tab.classList.remove('active');
        })
        if(target == prod || target == log || target == reg) {
            leftnav.classList.add('hide');
        } else {
            leftnav.classList.remove('hide');
        }
        tab.classList.add('active');
        target.classList.add('active');
    })
})

function showTable(tableId) {
    // Ẩn tất cả các bảng
    document.getElementById('product-table').style.display = 'none';
    document.getElementById('user-table').style.display = 'none';

    // Hiển thị bảng được chọn
    document.getElementById(tableId).style.display = 'table';
}

showTable('product-table');