//Ação de armazenar as perguntas e resposta
$('.cardd').click((e) => {
    let perguntaId = $(e.currentTarget).parent().parent().parent().attr('id').replace('card-', '').trim();
    let pergunta = $(e.currentTarget).parent().parent().parent().find('.yellow-text').text().trim();
    let resposta = $($(e.currentTarget).find("h2")[1]).text();

    $('#orcamento').append(
        "<input type='text' name='perguntas["+perguntaId+"][text]' value='"+pergunta+"'>" +
        "<input type='text' name='perguntas["+perguntaId+"][value]' value='"+resposta+"'>"
    );
});


// Validação formulário
$('#form-body').submit((e) => {
    e.preventDefault();
    let body = $('#form-body').serializeArray();

    $.ajax({
        'url': 'config/processa_envio.php',
        'type': 'POST',
        'dataType': 'JSON',
        'data': body,
        error: (err) => {
            $('.div-error').empty();
            err.responseJSON.forEach((el) => {
                $('.div-error').append(el);
                $('#div-errors').show();
            });
        },
        success: (res) => {
            alert('Orçamento enviado para o e-mail.');
        },
    });
});


//Mascara Valor total
Number.prototype.formatMoney = function(places, symbol, thousand, decimal) {
    places = !isNaN(places = Math.abs(places)) ? places : 2;
    symbol = symbol !== undefined ? symbol : "$";
    thousand = thousand || ",";
    decimal = decimal || ".";
    var number = this,
        negative = number < 0 ? "-" : "",
        i = parseInt(number = Math.abs(+number || 0).toFixed(places), 10) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return symbol + negative + (j ? i.substr(0, j) + thousand : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousand) + (places ? decimal + Math.abs(number - i).toFixed(places).slice(2) : "");
};


//INICIO - Valores de Respostas

var total = 0

$( "#01, #02, #03" ).click(function() {
    total += 0
    document.getElementById('preco2').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#04" ).click(function() {
    total += 10000
    document.getElementById('preco3').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#05" ).click(function() {
    total += 10000
    document.getElementById('preco3').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#06" ).click(function() {
    total += 20000
    document.getElementById('preco3').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#07" ).click(function() {
    total += 10000
    document.getElementById('preco4').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#08" ).click(function() {
    total += 20000
    document.getElementById('preco4').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#09" ).click(function() {
    total += 0
    document.getElementById('preco4').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#10" ).click(function() {
    total += 0
    document.getElementById('preco5').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#11" ).click(function() {
    total += 5000
    document.getElementById('preco5').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#12" ).click(function() {
    total += 20000
    document.getElementById('preco5').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#13" ).click(function() {
    total += 0
    document.getElementById('preco6').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#14" ).click(function() {
    total += 5000
    document.getElementById('preco6').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#15" ).click(function() {
    total += 12000
    document.getElementById('preco6').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#16" ).click(function() {
    total += 0
    document.getElementById('preco7').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#17" ).click(function() {
    total += 30000
    document.getElementById('preco7').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#18" ).click(function() {
    total += 0
    document.getElementById('preco8').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#19" ).click(function() {
    total += 2000
    document.getElementById('preco8').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#20" ).click(function() {
    total += 5000
    document.getElementById('preco8').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#21" ).click(function() {
    total += 10000
    document.getElementById('preco8').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#22" ).click(function() {
    total += 0
    document.getElementById('preco9').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#23" ).click(function() {
    total += 8000
    document.getElementById('preco9').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#24" ).click(function() {
    total += 0
    document.getElementById('preco10').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#25" ).click(function() {
    total += 2000
    document.getElementById('preco10').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#26" ).click(function() {
    total += 5000
    document.getElementById('preco10').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#27" ).click(function() {
    total += 20000
    document.getElementById('preco10').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#28" ).click(function() {
    total += 0
    document.getElementById('preco11').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#29" ).click(function() {
    total += 4000
    document.getElementById('preco11').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#30" ).click(function() {
    total += 22000
    document.getElementById('preco11').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#31" ).click(function() {
    total += 0
    document.getElementById('preco12').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#32" ).click(function() {
    total += 4000
    document.getElementById('preco12').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#33" ).click(function() {
    total += 0
    document.getElementById('preco13').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#34" ).click(function() {
    total += 1000
    document.getElementById('preco13').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#35" ).click(function() {
    total += 5000
    document.getElementById('preco13').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#36" ).click(function() {
    total += 0
    document.getElementById('preco14').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#37" ).click(function() {
    total += 1000
    document.getElementById('preco14').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#38" ).click(function() {
    total += 1500
    document.getElementById('preco14').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#39" ).click(function() {
    total += 5000
    document.getElementById('preco14').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#40" ).click(function() {
    total += 10000
    document.getElementById('preco15').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#41" ).click(function() {
    total += 18000
    document.getElementById('preco15').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#42" ).click(function() {
    total += 22000
    document.getElementById('preco15').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#43" ).click(function() {
    total += 30000
    document.getElementById('preco15').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
});

$( "#44" ).click(function() {
    total += 0
    document.getElementById('preco-final').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
    $("#amount").val(total);
});

$( "#45" ).click(function() {
    total += 15000
    document.getElementById('preco-final').innerHTML = total.formatMoney(2, "R$ ", ".", ",");
    $("#amount").val(total);
});

$( "#44, #45" ).click(function() {
    $( ".13, #completado" ).addClass( "invisible" );
});

$( "#01, #03" ).click(function() {
    $( "#card-1" ).removeClass( "show" );
});

$( "#04, #05, #06" ).click(function() {
    $( "#card-2" ).removeClass( "show" );
});
    // FIM - Valores de Respostas


    // INICIO - Paginas de Perguntas
$(document).ready(function(){

var current_fs, next_fs, previous_fs;

var steps = $(".card-body").length;

var current = 1;
setProgressBar(current);

$(".next").click(function(){

    val2  = false;
    val3  = false;
    val4  = false;
    val5  = false;
    val6  = false;
    val7  = false;
    val8  = false;
    val9  = false;
    val10 = false;
    val11 = false;
    val12 = false;
    val13 = false;
    val14 = false;
    val15 = false;
    val16 = false;

    str1  = "next1";
    str2  = "next2";
    str3  = "next3";
    str4  = "next4";
    str5  = "next5";
    str6  = "next6";
    str7  = "next7";
    str8  = "next8";
    str9  = "next9";
    str10 = "next10";
    str11 = "next11";
    str12 = "next12";
    str13 = "next13";
    str14 = "next14";
    str15 = "next15";
    str16 = "next16";


    if(!str2.localeCompare($(this).attr('id'))) {
        val2 = true;
    }

    if(!str3.localeCompare($(this).attr('id'))) {
        val3 = true;
    }

    if(!str4.localeCompare($(this).attr('id'))) {
        val4 = true;
    }

    if(!str5.localeCompare($(this).attr('id'))) {
        val5 = true;
    }

    if(!str6.localeCompare($(this).attr('id'))) {
        val6 = true;
    }
    if(!str7.localeCompare($(this).attr('id'))) {
        val7 = true;
    }

    if(!str8.localeCompare($(this).attr('id'))) {
        val8 = true;
    }

    if(!str9.localeCompare($(this).attr('id'))) {
        val9 = true;
    }

    if(!str10.localeCompare($(this).attr('id'))) {
        val10 = true;
    }

    if(!str11.localeCompare($(this).attr('id'))) {
        val11 = true;
    }
    if(!str12.localeCompare($(this).attr('id'))) {
        val12 = true;
    }

    if(!str13.localeCompare($(this).attr('id'))) {
        val13 = true;
    }

    if(!str14.localeCompare($(this).attr('id'))) {
        val14 = true;
    }

    if(!str15.localeCompare($(this).attr('id'))) {
        val15 = true;
    }

    if(!str16.localeCompare($(this).attr('id'))) {
        val16 = true;
    }


if((!str1.localeCompare($(this).attr('id')))
    || (!str2.localeCompare($(this).attr('id')) && val2 == true)
    || (!str3.localeCompare($(this).attr('id')) && val3 == true)
    || (!str4.localeCompare($(this).attr('id')) && val4 == true)
    || (!str5.localeCompare($(this).attr('id')) && val5 == true)
    || (!str6.localeCompare($(this).attr('id')) && val6 == true)
    || (!str7.localeCompare($(this).attr('id')) && val7 == true)
    || (!str8.localeCompare($(this).attr('id')) && val8 == true)
    || (!str9.localeCompare($(this).attr('id')) && val9 == true)
    || (!str10.localeCompare($(this).attr('id')) && val10 == true)
    || (!str11.localeCompare($(this).attr('id')) && val11 == true)
    || (!str12.localeCompare($(this).attr('id')) && val12 == true)
    || (!str13.localeCompare($(this).attr('id')) && val13 == true)
    || (!str14.localeCompare($(this).attr('id')) && val14 == true)
    || (!str15.localeCompare($(this).attr('id')) && val15 == true)
    || (!str16.localeCompare($(this).attr('id')) && val16 == true)) {
current_fs = $(this).parent().parent();
next_fs = $(this).parent().parent().next();

$(current_fs).removeClass("show");
$(next_fs).addClass("show");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

next_fs.css({
'display': 'block'
});
}
});
    // FIM - Paginas de Perguntas


    // INICIO - LINK de Paginas de Perguntas
setProgressBar(++current);

var c = document.getElementById('cnt').textContent;
document.getElementById('cnt').textContent = Number(c) + 7.0;
}
});

    $(".cardd").click(function(){

        val2  = false;
        val3  = false;
        val4  = false;
        val5  = false;
        val6  = false;
        val6  = false;
        val7  = false;
        val8  = false;
        val9  = false;
        val10 = false;
        val11 = false;
        val12 = false;
        val13 = false;
        val14 = false;
        val15 = false;
        val16 = false;

        str1  = "1";
        str2  = "2";
        str3  = "3";
        str4  = "4";
        str5  = "5";
        str6  = "6";
        str7  = "7";
        str8  = "8";
        str9  = "9";
        str10 = "10";
        str11 = "11";
        str12 = "12";
        str13 = "13";
        str14 = "14";
        str15 = "15";
        str16 = "16";


        if(!str2.localeCompare($(this).data('next'))) {
            val2 = true;
        }

        if(!str3.localeCompare($(this).data('next'))) {
            val3 = true;
        }

        if(!str4.localeCompare($(this).data('next'))) {
            val4 = true;
        }

        if(!str5.localeCompare($(this).data('next'))) {
            val5 = true;
        }

        if(!str6.localeCompare($(this).data('next'))) {
            val6 = true;
        }
        if(!str7.localeCompare($(this).data('next'))) {
            val7 = true;
        }

        if(!str8.localeCompare($(this).data('next'))) {
            val8 = true;
        }

        if(!str9.localeCompare($(this).data('next'))) {
            val9 = true;
        }

        if(!str10.localeCompare($(this).data('next'))) {
            val10 = true;
        }

        if(!str11.localeCompare($(this).data('next'))) {
            val11 = true;
        }
        if(!str12.localeCompare($(this).data('next'))) {
            val12 = true;
        }

        if(!str13.localeCompare($(this).data('next'))) {
            val13 = true;
        }

        if(!str14.localeCompare($(this).data('next'))) {
            val14 = true;
        }

        if(!str15.localeCompare($(this).data('next'))) {
            val15 = true;
        }

        if(!str16.localeCompare($(this).data('next'))) {
            val16 = true;
        }

        if((!str1.localeCompare($(this).data('next')))
            || (!str2.localeCompare($(this).data('next')) && val2 == true)
            || (!str3.localeCompare($(this).data('next')) && val3 == true)
            || (!str4.localeCompare($(this).data('next')) && val4 == true)
            || (!str5.localeCompare($(this).data('next')) && val5 == true)
            || (!str6.localeCompare($(this).data('next')) && val6 == true)
            || (!str7.localeCompare($(this).data('next')) && val7 == true)
            || (!str8.localeCompare($(this).data('next')) && val8 == true)
            || (!str9.localeCompare($(this).data('next')) && val9 == true)
            || (!str10.localeCompare($(this).data('next')) && val10 == true)
            || (!str11.localeCompare($(this).data('next')) && val11 == true)
            || (!str12.localeCompare($(this).data('next')) && val12 == true)
            || (!str13.localeCompare($(this).data('next')) && val13 == true)
            || (!str14.localeCompare($(this).data('next')) && val14 == true)
            || (!str15.localeCompare($(this).data('next')) && val15 == true)
            || (!str16.localeCompare($(this).data('next')) && val16 == true)) {
            var next = $(this).data('next') -1;
            var card = `card-${next}`;

            current_fs = $(`#${card}`);
            next_fs = $(`#card-${next+1}`);

            $(current_fs).removeClass("show");
            $(next_fs).addClass("show");

            current_fs.animate({}, {
                step: function() {

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });

                    next_fs.css({
                        'display': 'block'
                    });
                }
            });
            setProgressBar(++current);
            var c = document.getElementById('cnt').textContent;
            document.getElementById('cnt').textContent = Number(c) + 7.0;
        }
    });

    // FIM - LINK de Paginas de Perguntas


    // INICIO - Barra de progresso
$(".prev").click(function(){

current_fs = $(this).parent().parent();
previous_fs = $(this).parent().parent().prev();

$(current_fs).removeClass("show");
$(previous_fs).addClass("show");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

previous_fs.css({
'display': 'block'
});
}
});
setProgressBar(--current);
var c = document.getElementById('cnt').textContent;
document.getElementById('cnt').textContent = Number(c) - 7.0;
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar").css("width",percent+"%");
}

// $('.radio-group .radio').click(function(){
// $('.selected .fa').removeClass('fa-check');
// $('.selected .fa').addClass('fa-circle');
// $('.radio').removeClass('selected');
// $(this).addClass('selected');
// $('.selected .fa').removeClass('fa-circle');
// $('.selected .fa').addClass('fa-check');
// });

});

    // FIM - Barra de progresso

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
