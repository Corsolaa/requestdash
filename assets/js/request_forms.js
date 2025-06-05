function change_http_method(select_element) {
    select_element.classList.remove('get', 'post', 'put', 'delete');

    const selected_option = select_element.options[select_element.selectedIndex];
    select_element.classList.add(selected_option.className);
}