

var csrf = {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')};
var mycsrf = $('meta[name="csrf-token"]').attr('content');
var realpath = 'http://127.0.0.1:8000/';



function makeAjax(myurl, mdata, callback){
  (function($) {
     var fd = new FormData();
      for (var key in mdata) {
        fd.append(key, mdata[key]);
      }
    $.ajax({
          url: myurl,
          method: 'post',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: fd,
          contentType: false,
          processData: false,
        }).done(function(response) {
            callback(response);
            closeSwal();
        }).fail(function(jqXHR, ajaxOptions, thrownError) {
               toastMe('danger', 'Connection Failed', 'Something went wrong, please reload the page and try again.');
            closeSwal();
         });
  })(jQuery);
}


function convertFormIntoArray(form) {
  var formData = new FormData(form);
  var dataObject = {};

  for (var i = 0; i < form.elements.length; i++) {
    var input = form.elements[i];

    if (input.type === "checkbox") {
      dataObject[input.name] = input.checked ? input.value : null;
    } else if (input.type !== "submit" && input.type !== "hidden") {
      dataObject[input.name] = input.value;
    } else if (input.type === "hidden") {
      dataObject[input.name] = input.value;
    }
  }

  return dataObject;
}


function getValueByKey(key, dataArray) {
    return dataArray[key];
}

function toastMe(bg, title, text){
  // alert(bg);return false;
  toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
if (bg == 'success') {
  toastr.success(text, title);
}else if(bg == 'warning'){
   toastr.warning(text, title);
}else if(bg == 'danger'){
  toastr.error(text, title);
}else if(bg == 'info'){
  toastr.info(text, title);
}

}

function reloadMe(time){
 window.setTimeout(function(){
      location.reload(true);
    }, time);
}

function showLoading(msg = 'Hold On!'){
  Swal.fire({
          title: msg,
          html: '<div class="preloader-style-fourteen" id="loader-style">'+
                                            '<div class="preloader-wrap">'+
                                                '<span></span>'+
                                                '<span></span>'+
                                                '<span></span>'+
                                                '<span></span>'+
                                            '</div>'+
                                        '</div>',
          allowOutsideClick: false,
          showConfirmButton:false,
          customClass: {
            'popup': 'LoadingContainer'
          },
          // willOpen: () => {
          //     Swal.showLoading()
          // },
      });
}

function closeSwal(){
  Swal.close();
}

function printErrorMsg (msg) {  
    $.each( msg, function( key, value ) {
      toastMe('danger', 'Request Failed', value)
    });
}


var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

$('select').selectpicker();

    $('select').selectpicker();
    var bsSearch = $('.bs-searchbox');
    bsSearch.append('  <i class="fas fa-search search-icon"></i>');
    $(".bs-searchbox input").addClass('global-input');
    $(".bs-searchbox input").attr('placeholder', 'Search item to select...');