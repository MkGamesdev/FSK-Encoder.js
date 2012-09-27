function dlaudio()
  {
    reqwest(
      {
          url: 'download.php'
        , type: 'html'
        , method: 'post'
        , data: { data: $('audiodata').innerHTML, time: new Date() }
        , success: function (resp)
            {
              if(resp.substr(0, 5) != 'Error')
                {
                  window.location.href = resp;
                }
              else
                {
                  alert(resp);
                }
            }
      })
  }