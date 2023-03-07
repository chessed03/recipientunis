const cargaAutomatica = ( url_get_data_notices ) => {

    $.ajax({
  
      url      : url_get_data_notices,
      headers  : { 'X-CSRF-TOKEN': $('meta[name="csrf-token_UWl0eGVuTg=="]').attr('content') },
      method   : 'POST',
      dataType : 'json',
      success: function(data) {
    
        let $body = $('.tabla_carga_automatica').find('tbody');
  
        $body.empty();
  
        $.each(data, function(index, data)
            {
                let $tr = `
                <tr>
  
                  <td> ${ data.notice_id } </td>
                  <td> ${ data.name } </td>
                  <td> ${ data.start_date } </td>
                    
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