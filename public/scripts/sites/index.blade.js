const cargaAutomatica = ( url_get_data_notices, date ) => {

    $.ajax({
  
      url      : url_get_data_notices,
      headers  : { 'X-CSRF-TOKEN': $('meta[name="csrf-token_UWl0eGVuTg=="]').attr('content') },
      method   : 'POST',
      data     : { 'date': date },
      dataType : 'json',
      success  : function( item ) {
    
        let $body = $('.tabla_carga_automatica').find('tbody');
  
        $body.empty();
  
        $.each( item, function(index, item )
            {
                let $tr = `
                <tr>
  
                  <td> ${  item.notice_id } </td>
                  <td> ${  item.name } </td>
                  <td> ${  item.start_date } </td>
                    
                </tr>
              `;
  
              $body.append($tr);
            }
        )
    
      }, error : function() {
  
            console.log("existió un problema");
  
      }
    });
  
  }