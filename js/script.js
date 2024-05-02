function hideTask(event) {
    const taskElement = event.currentTarget.closest('.test');
    const LeftinfoBlock = taskElement.querySelector('.left_info_block');
    const labelStrRight = taskElement.querySelector('.right_str');
    const labelStrLeft = taskElement.querySelector('.left_str');

    if (LeftinfoBlock.style.display === 'none' || LeftinfoBlock.style.display === '') {
        $(LeftinfoBlock).slideDown();
        labelStrRight.style.transform = 'rotate(0deg)';
        labelStrLeft.style.transform = 'rotate(0deg)';
    } else {
        $(LeftinfoBlock).slideUp();
        labelStrRight.style.transform = 'rotate(-45deg)';
        labelStrLeft.style.transform = 'rotate(45deg)';
    }
}
