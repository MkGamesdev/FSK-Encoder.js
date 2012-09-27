function dlaudio()
  {
    reqwest(
      {
          url: './download/'
        , type: 'html'
        , method: 'post'
        , data: { data: $('audiodata').innerHTML, time: Date.now }
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
