//var csaJSON = jQuery.getJSON('../../ghc/api/samples/csas.json')
//var csas = jQuery.parseJSON(csaJSON);
var csaJSON;	
$.getJSON('../../ghc/api/samples/sample.json', function(data) {
	csaJSON = data;
	console.log(data.communities[24].name);
	
});
	console.log(csaJSON);
var onMapClick = function(e) {
  var csa_number = $(document).href.match(/#\d*/);
  console.log("CSA Number");
};

function getCSAName(csaNum) {
	// TODO: HOOK TO DATABASE

	console.log(csaJSON[csaNum]);
	return "Neighborhood Name";
}

$(document).ready(function() {
    	$('#csa-image-map area').each(function(idx, area){
      		$(area).bind('click', function(e) {
			  var csa_number = document.location.href.match(/#\d*/);
			  e.currentTarget.style.backgroundColor = "#FFFF00";
			  e.currentTarget.style.color = "#FFFF00";
			  $("#neighborhood").html("<h3>"+getCSAName(csa_number)+"</h3>");
			});
		});
		//$('#csa-image-map').click(function() { console.log("Clicked map");});
});

var sampleJSON = {

  communities: [
    24 => { name: 'Mt. Washington/Coldspring', id: 24},
    36 => { name: 'The Waverlies', id: 36}
  ],


  indicator_groups: [
    4 => { name: 'Housing and Community Development', id: 4},
    8 => { name: 'Crime and Safety' ,id: 8}
  ],


  indicators: [
    106 => { name: 'Median Sales Price', id: 106, group: 4 },
    122 => { name: 'Juvenile Arrest Rate', id: 122, group: 8}
  ],


  data: [
    {
      community: 24,
      indicator: 122,
      points: [
        { year: 2000, value: 12450},
        { year: 2002, value: 28000},
        { year: 2012, value: 30000}
      ]
    },
    {
      community: 36,
      indicator: 122,
      points: [
        { year: 2000, value: 12450},
        { year: 2001, value: 12450},
        { year: 2002, value: 28000},
        { year: 2012, value: 30000}
      ]
    },
    {
      community: 24,
      indicator: 106,
      points: [
        { year: 2000, value: 2450},
        { year: 2002, value: 8000},
        { year: 2012, value: 3000}
      ]
    },
    {
      community: 36,
      indicator: 106,
      points: [
        { year: 2000, value: 1},
        { year: 2001, value: 12},
        { year: 2002, value: 6},
        { year: 2012, value: 5}
      ]
    }
  ]
};