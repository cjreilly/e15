<?php
#
# Copyright 2020 Christopher Reilly
#
# The Javascript is mostly presentation for google charts, not to be a
# distraction from the server providing this data as a customizable view.
# There is a JSFiddle for this: https://jsfiddle.net/api/post/library/pure/
# The full API example list is here:
# https://developers.google.com/chart/interactive/docs/gallery/sankey
#
?>
<script type="text/Javascript">
    google.charts.load('current', {'packages':['sankey']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var jsonData = $.ajax({
          url: "/data/farmData",
          dataType: "json",
          async: false
      }).responseText;

      var data = new google.visualization.DataTable(jsonData);

      // Sets chart options.
      var options = {
        width: 400,
      };

      // Instantiates and draws our chart, passing in some options.
      var chart = new google.visualization.Sankey(document.getElementById('sankey-render'));
      chart.draw(data, options);
      var downloadLink = document.getElementById('sankey-download-link');
      downloadLink.innerHTML = (chart.getImageURI
                                ? "<a href=\""+chart.getImageURI()+"\">Download as image</a>"
                                : "");
    }
</script>
<div id="sankey-render" style="width: 400px; height: 300px;"></div>
<span id="sankey-download-link"></span>
