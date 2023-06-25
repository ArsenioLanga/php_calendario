
(function (win, doc) {
  'use strict';

  let calendarEl = doc.querySelector('.calendar');
  let calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    headerToolbar: {
      start: 'title',
      center: 'today',
      end: 'prev,next timeGridDay,timeGridWeek,dayGridMonth'
    },
    locale: 'pt',
    buttonText: {
      today: 'hoje',
      month: 'mes',
      week: 'semana',
      day: 'dia',
      list: 'lista'
    },
    // dateClick: function (info) {
    //   alert('Clicked on: ' + info.dateStr);
    //   info.dayEl.style.backgroundColor = 'blue';

    // },
    selectable: true,
    select: async (arg) => {
      let title = prompt('Introduza o nome do evento');
      var dados = [];
      if (title) {
        let response = await fetch('http://localhost/PHP%20Calandario/controllers/Controller.php',

          {
            method: 'post',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json'
            },
            body: JSON.stringify({
              title: title,
              start: arg.start,
              end: arg.end
            })
          });

      }
      dados = [title, arg.start, arg.end];
      $.ajax({

        url: 'controllers/Controller.php',
        type: 'POST',
        data: {
          'title': title,
          'start': arg.start,
          'end': arg.end,
        },
        dataType: 'json',
        success: function (data) {
          // alert('Resultado: '+data);
        },
        error: function (request, error) {
          // alert("Erro: "+JSON.stringify(request));
        }
      });
    }
  });
  calendar.render();

})(window, document);



