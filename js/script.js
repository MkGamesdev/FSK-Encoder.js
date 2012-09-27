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

function changeloadingmode(element,force)
  {
    if(typeof force !== "undefined")
      {
        if(force == 'on')
          {
            element.className = element.className+' loading';
          }
        if(force == 'off')
          {
            element.className.replace(' loading', '');
          }
      }
    else
      {
        if(element.disabled == true)
          {
            
          }
        else
          {
            if(element.className.search('loading') != -1)
              {
                element.className = element.className.replace(' loading', '');
                var delLoading = window.setTimeout("changeloadingmode($('"+element.id+"'), 'off');", 2500);
              }
            else
              {
                element.className = element.className+' loading';
                return true;
              }
          }
      }
  }
