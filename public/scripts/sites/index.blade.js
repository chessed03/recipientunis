const onLoadPage = ( url_get_data_notices, date ) => {

    $.ajax({
  
      url      : url_get_data_notices,
      headers  : { 'X-CSRF-TOKEN': $('meta[name="csrf-token_UWl0eGVuTg=="]').attr('content') },
      method   : 'POST',
      data     : { 'date': date },
      dataType : 'json',
      success  : function( items ) {
        
        let $body = '';
    
        $.each( items, function(index, item ){
           
          $body += `
            <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                <div class="event-item mb-30 hover-zoomin">
                    <div class="thumb">
                        <a href="${ item.type }/${ item.slug }"><img src="${ item.image_url }" alt="contact-bg-an-01"></a>
                    </div>
                    <div class="event-content">                                    
                        <div class="date"><strong> ${ moment(item.start_date).format('DD') } </strong> ${ moment(item.start_date).format('MMMM') }, ${ moment(item.start_date).format('YYYY') }</div>
                        <h3><a href="${ item.type }/${ item.slug }"> ${  item.name } </a></h3>
                          <p> ${ item.description } </p>
                        <div class="time">${ moment(item.start_date).format('h:mm a') } - ${ moment(item.finish_date).format('h:mm a') } <i class="fal fa-long-arrow-right"></i> <strong> ${ item.location } </strong></div>
                    </div>                       
                </div>
            </div>
          `;
  
        })

        $('#upcomingEvents').html($body);

      }, error : function() {
  
            console.log("existió un problema");
  
      }
    });
  
  }