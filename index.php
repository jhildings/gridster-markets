<html>
<head>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

<script src="jquery.gridster.min.js"></script>


<style>
body {margin:0}
div {
    width: 100%;
    height: 100%}

div div {
    width: 50%;
    height: 50%;
    outline: 1px solid;
    float: left;
}

iframe {
    display:block;
    width:100%;
    height: 100%;
}

</style>
</head>

<body>

    <script type="text/javascript">

var Coinbase = 
{"Coinbase":
{
name: "Coinbase" ,
url :"https://bitcoinwisdom.com/markets/bitfinex/btcusd"
}
}

console.log(Coinbase)

var markets = {
"Bitfiniex":
{ 
name: "Bitfinex" , 
url :"https://bitcoinwisdom.com/markets/bitfinex/btcusd"
},

"Bitstamp":
{name:"Bitstamp" ,
 url: "https://bitcoinwisdom.com/markets/bitstamp/btcusd"
},
"Huobi":
{name: "Huobi" , 

url :"https://bitcoinwisdom.com/markets/huobi/btccny" },
"OKCoin":
{name: "OKCoin", url: "https://bitcoinwisdom.com/markets/okcoin/btccny"}

};

console.log(markets)
 var gridster;

$(function(){

  var items = [];
  $.each( markets, function( key,  val ) {
  
    //items.push( ["<div class='Cell'><iframe src='" + val + "'>" + key + "</iframe></div>",1,1]);
  //  $("#exchanges").append("<div class='Cell'><iframe src='" + val + "'>" + key + "</iframe></div>")
    $("#exchanges").append("<span id="+key+">"+ markets[key].name + "</span><br>")
//   $('.gridster').append(items[0]);
})



/*
  $.each(items, function ( key, val ) {
   console.log(items)
      gridster = $(".gridster > div").gridster({
          widget_margins: [15, 15],
          max_cols: 5,
          widget_base_dimensions: [350, 355]
      }).data('gridster');
        gridster.add_widget.apply(gridster,items[key])
             });
             
             */
             

$( "span" ).click(function(e) {
  var ex =   $(this).text();
  var ex2 =  $(this).attr('id');
  var u = markets[ex2].url;
  $("#exchanges").append("<div><iframe src="+u+" >" + ex +  u  + "</iframe></div>")
});
             
});





          </script>


<div id="exchanges"></div>
<div id="charts"></div>


</body>
</html>
