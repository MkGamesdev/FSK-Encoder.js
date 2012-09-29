/* ##############################

FSK  Serial  Generator
    in  JavaScript    
 for SoftModem board! 

Demo: http://cdn.simon.waldherr.eu/projects/fsk/
Repo: https://github.com/SimonWaldherr/FSK-Encoder.js
Version: 0.6
License: MIT https://github.com/SimonWaldherr/FSK-Encoder.js/blob/master/LICENSE.md

############################## */

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
