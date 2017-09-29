(function($) {
    $.fn.clickToggle = function(func1, func2) {
        var funcs = [func1, func2];
        this.data('toggleclicked', 0);
        this.click(function() {
            var data = $(this).data();
            var tc = data.toggleclicked;
            $.proxy(funcs[tc], this)();
            data.toggleclicked = (tc + 1) % 2;
        });
        return this;
    };
}(jQuery));

var bannershome = new Swiper ('#bannershome .swiper-container', {
    loop: true,
    nextButton: '.fa-angle-right',
    prevButton: '.fa-angle-left',
    simulateTouch: false,
    autoplay: true,
    autoplayStopOnLast: false,
    autoplayDisableOnInteraction: true,
    touchReleaseOnEdges: true,
    iOSEdgeSwipeDetection: true,
    resistance: false,
    keyboardControl: true,
});

$('#menumobile').click(function(){
    var menu = $('#header .menu');
    menu.slideToggle(200,function(){
        menu.toggleClass('ativa');
        menu.removeAttr('style');
    });
});

$('#content').click(function() {
    var menu = $('#header .menu');
    if (menu.hasClass('ativa')) {
        menu.slideUp('fast',function(){
            menu.removeAttr('style').removeClass('ativa');
        });
    }
});

var navgaleriacasa = new Swiper ('#galeriacasas nav .swiper-container', {
    freeMode: true,
    freeModeMomentum: false,
    freeModeMomentumBounce: false,
    simulateTouch: false,
    slidesPerView: 'auto',
    loop: false,
    paginationClickable: true,
    spaceBetween: 60,
    breakpoints: {
        990:{
          spaceBetween: 20
        },
        768:{
            spaceBetween: 30
        }  
    }
});

var galeriacasa = new Swiper ('.fotosWrapper .swiper-container', {
    loop: true,
    simulateTouch: true,
    keyboardControl: true,
    nextButton: '.fa-angle-right',
    prevButton: '.fa-angle-left',
    preloadImages: false,
    lazyLoading: true,
});


$('#selectCasa ul li').clickToggle(function(){
    $('#selectCasa ul li').addClass('ativa');
},function(){

    $('#selectCasa ul li').removeClass('ativa first');
    $(this).after($('#selectCasa ul li').first()).addClass('first ativa');
    var g = $(this).data('galeria');
    $('.fotosWrapper').removeClass('active');
    $('#'+g).addClass('active');

    var slider = $('.fotosWrapper .swiper-container')[0,1].swiper;
    slider.update(true);
    slider.updateContainerSize();
    slider.updateSlidesSize();
    slider.updateProgress();
    slider.updatePagination();
    slider.updateClasses();

    //trocar slideTo dos menus
    if (g == 'fotoscasaazul') {
        var to = casas.azul;
    } else if (g == 'fotoscasaamarela') {
        var to = casas.amarela;
    }

    var menu = $('#galeriacasas .list-fotos');
    menu.find('#fotosfachada').attr('data-to',to.fachada);
    menu.find('#fotosquarto').attr('data-to',to.quarto);
    menu.find('#fotoscozinha').attr('data-to',to.cozinha);
    menu.find('#fotossalaestar').attr('data-to',to.salaestar);
    menu.find('#fotostoilet').attr('data-to',to.toilet);
    menu.find('#fotosareaexterna').attr('data-to',to.areaexterna);

});


var blog = new Swiper ('#blogFooter .swiper-container', {
    loop: true,
    simulateTouch: false,
    autoplay: true,
    autoplayDisableOnInteraction: true,
    nextButton: '.fa-angle-right',
    prevButton: '.fa-angle-left',
    pagination: '.swiper-pagination',
    paginationClickable: true
});

$('#faq ul li span').click(function(){
    var li = $(this).parents('li:first');
    li.find('.content').slideToggle(200,function(){
        li.toggleClass('ativa');
        li.removeAttr('style');
    });
});

$('#datepicker').datepicker({
    multidate: true,
    language: 'pt-BR',
    keyboardNavigation: false,
    maxViewMode: 'decade',
});

$('#datepicker').on('changeDate', function() {
    $('#data').val($('#datepicker').datepicker('getFormattedDate'));
});

/* Calendário / Fale Conosco */

$('#continuarcontato').click(function(){
    $('.wrapper').removeClass('active');
    $('#formcontato').addClass('active');
    $(this).removeClass('active');
    $('#voltarcontato').addClass('active');
});

$('#voltarcontato').click(function(){
    $('.wrapper').removeClass('active');
    $('#datepicker').addClass('active');
     $(this).removeClass('active');
    $('#continuarcontato').addClass('active');
});

var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
};

$('input.tel').mask(SPMaskBehavior, spOptions);
//$('input.cep').mask('99999-999');

function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}

function validateTel(tel) {
    //var n  = tel.length;
    var c = 0;
    tel.forEach(function(v){
        if (v.value != "") {
            c++;
        }
    });
    if (c >= 1) {
        return true;
    } else {
        return false;
    }
}

function validateRequired(required) {
    var n = required.length;
    var c = 0;
    required.forEach(function(v){
        if (v.value != "") {
            c++;
        }
    });
    if (c === n) {
        return true;
    } else {
        return false;
    }
}

window.sr = ScrollReveal();

sr.reveal('.reveal', {
    origin: 'bottom',
    distance: '20px',
    duration: 1000,
    delay: 0,
    opacity: 0,
    scale: 1,
    easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
    container: window.document.documentElement,
    mobile: true,
    reset: false,
    useDelay: 'once',
    viewFactor: 0.2,
    viewOffset: { top: 100, right: 0, bottom: 100, left: 0 },
});


sr.reveal('.textWrapper, .iconWrapper, .link-social, #footer .logo', {
    origin: 'bottom',
    distance: '10px',
    duration: 1000,
    delay: 0,
    opacity: 0,
    scale: 1,
    easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
    container: window.document.documentElement,
    mobile: true,
    reset: false,
    useDelay: 'once',
    viewFactor: 0.2,
    viewOffset: { top: 30, right: 0, bottom: 50, left: 0 },
}, 50);



/* Conversão */
$(function(){

    var form = $('form.form');
    var btn = form.find('button');

    btn.click(function(){

        var form = $(this).parents('form:first');
        var inputs = form.find(':input');
        var dados = inputs.serializeArray();
        var dados2 = inputs.serialize();
        var text = $(this).val(); //Valor que estava no button
        form.find('.required').removeClass('required-warning');
        var id = form.attr('id');   

        var email = "";

        //Aqui vai descobrir o e-mail
        dados.forEach(function(element) {
            if (element.name === "email") {
                email = element.value;
            }
        });

        form.find('.resposta').html('').removeClass('animated shake');

        /*Validar campos requeridos*/
        var required = form.find('.required').serializeArray();
        var tel = form.find('.tel').serializeArray();

        /*Valida campos*/
        if (!validateRequired(required)) {
            form.find('.resposta').html('Preencha todos os campos obrigatórios').addClass('animated shake');
            return false;
        }

        /*Validar e-mail*/
        if (!validateEmail(email) ) {
            form.find('.resposta').html('Preencha o e-mail corretamente').addClass('animated shake');
            return false;
        }

        /*Valida telefones*/
        if (!validateTel(tel) && tel.length != 0) {
            form.find('.resposta').html('Preencha pelo menos um telefone').addClass('animated shake');
            return false;
        }

        //$(this).remove();
        inputs.val('');

        RdIntegration.post(dados);
        form.find('.resposta').html('Obrigado pelo seu cadastro');
   
    });
    
});


