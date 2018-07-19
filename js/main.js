$(document).ready(function(){
  $.ajax({
    url : "./chart/data.php",
    type : "GET",
    success : function (data) {
      console.log(data);

      var number = {
          fanNumber : [],
          impressionNumber :[],
          engageNumber : [],
          linkNumber : []
      };

      var len = data.length;

      for (var i = 0; i <len; i++) {
        if (data[i].twitter_dataname == "fans") {
          number.fanNumber.push(data[i].twitter_data);
        }
        else if (data[i].twitter_dataname == "impressions") {
          number.impressionNumber.push(data[i].twitter_data);
        }
        else if (data[i].twitter_dataname == "engagements") {
          number.engageNumber.push(data[i].twitter_data);
        }
        else if (data[i].twitter_dataname == "links") {
          number.linkNumber.push(data[i].twitter_data);
        }

      }
      console.log(number);

      var ctx = $("#bar-chart");
      Chart.defaults.global.defaultFontColor='white';
      var data = {
          labels : ["season1", "season2", "season3", "season4"],
          datasets : [
            {
              label: "fanNumber",
              data : number.fanNumber,
              fill: 'origin',
              borderColor: "#3e95cd",
              borderCapStyle: 'butt',
              borderJoinStyle: 'miter',
              pointBackgroundColor: "#3e95cd",
              pointHoverRadius: 5,
              backgroundColor: "rgba(75,192,192,0.4)",
            },
            {
              label: "impressionNumber",
              data : number.impressionNumber,
              fill: 'origin',
              borderColor: "#fb67e5",
              borderCapStyle: 'butt',
              borderJoinStyle: 'miter',
              pointBackgroundColor: "#fb67e5",
              pointHoverRadius: 5,
              backgroundColor: "rgba(251,103,229,0.4)",
            },
            {
              label: "engageNumber",
              data : number.engageNumber,
              fill: 'origin',
              borderColor: "#7eff00",
              borderCapStyle: 'butt',
              borderJoinStyle: 'miter',
              pointBackgroundColor: "#7eff00",
              pointHoverRadius: 5,
              backgroundColor: "rgba(126,255,0,0.4)",
            },
            {
              label: "linkNumber",
              data : number.linkNumber,
              fill: 'origin',
              borderColor: "#fff000",
              borderCapStyle: 'butt',
              borderJoinStyle: 'miter',
              pointBackgroundColor: "#fff000",
              pointHoverRadius: 5,
              backgroundColor: "rgba(255,240,0,0.4)",
            }
          ]
      };

      var chart = new Chart( ctx, {
          type : "line",
          data : data,
          options : {}
      });


    },
    error : function (data) {
      console.log(data);
    }

});




});
