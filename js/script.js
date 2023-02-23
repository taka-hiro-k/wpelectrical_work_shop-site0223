{
  'use strict'

  $('.navbtn').on('click', (event) => {
    event.preventDefault()
    $e = $(event.currentTarget)
    if($e.hasClass('close')) {
      // メニューが開いている状態から閉まる状態へ
      $('.menu').slideUp()
      $e.removeClass('close')
      $('.menu').addClass('collapse')
    } else {
      // メニューが閉じている状態から開く状態へ
      $('.menu').slideDown()
      $e.addClass('close')
      $('.menu').removeClass('collapse')
    }
  })

}
