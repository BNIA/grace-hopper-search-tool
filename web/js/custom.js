var updateCSA = function(list) {
  $('#csa').removeClass('waiting');
  var newDOM = "";
  for (var i = 0; i < list.length; i++) {
    var obj = list[i];
    newDOM += "<p>" + obj.name + "</p>";
  }
  // $('#csa').append(newDOM);
  console.log(newDOM);
};


var updateIndicators = function(list) {
  var getIndicatorGroup = function(key, values) {
    var handle = $('<a class="group" href="#">' + key + '</a>');
    var list = $('<ul class="unstyled"></ul>');
    for(var i = 0; i < values.length; i++) {
      list.append($('<li class="clearfix"><li>').html(
        '<label><input type="checkbox" name="ind[' + values[i].key + ']" /><span>'
       + values[i].name + '</span></label>')
      );
    }
    list.hide();
    handle.bind("click", function () {
      list.toggle();
      $(this).toggleClass('selected')
      return false;
    });
    return $('<div></div>').append(handle).append(list);
  };

  for (key in list) {
    $("#indicators").append(getIndicatorGroup(key, list[key]));
  }
};

$.ajax({
  url: 'data/csas.json',
  success: function(data) {
    updateCSA(data.csas);
  }
});

$.ajax({
  url: 'data/indicators.json',
  success: function(data) {
    updateIndicators(data);
    $('#indicators').removeClass('waiting');
  }
});

// Date range slider.
var updateSliderValues = function(min, max) {
  if (min == max) {
    $('#range .min').html('');
    $('#range .max').html('');
    $('#range .value').html('only ' + min);
  } else {
    $('#range .min').html(min);
    $('#range .max').html(max);
    $('#range .value').html('to');
  }
};
var startValues = [2000, 2012];
$('#range div.slider').slider({
  orientation: "horizontal",
  range: true,
  min: 2000,
  max: 2012,
  values: startValues,
  slide: function (event, ui) {
    updateSliderValues(ui.values[0], ui.values[1]);
  },
  create: function(event, ui) {
    updateSliderValues(startValues[0], startValues[1]);
    $('#range').removeClass('waiting');
  }
});