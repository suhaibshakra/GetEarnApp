<style>
      #chartdiv {
        width: 100%;
        height: 100vh;
      }
</style>
<script src="//cdn.amcharts.com/lib/5/index.js"></script>
<script src="//cdn.amcharts.com/lib/5/hierarchy.js"></script>
<script src="//cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<div id="chartdiv"></div>
<script>
    /**
 * ---------------------------------------
 * This demo was created using amCharts 5.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v5/
 * ---------------------------------------
 */

// Create root and chart
var root = am5.Root.new("chartdiv");

root.setThemes([
  am5themes_Animated.new(root)
]);

var container = root.container.children.push(
  am5.Container.new(root, {
    width: am5.percent(100),
    height: am5.percent(100),
    layout: root.verticalLayout
  })
);

var series = container.children.push(
  am5hierarchy.Tree.new(root, {
    singleBranchOnly: false,
    downDepth: 1,
    initialDepth: 55,
    topDepth: 0,
    valueField: "value",
    categoryField: "name",
    childDataField: "children",
    paddingBottom: 90,
    paddingTop: 80
  })
);

// Disable circles
series.circles.template.setAll({
  radius: 40,
  forceHidden: true
});

series.outerCircles.template.setAll({
  radius: 40,
  forceHidden: true
});

// ... except for central node
series.circles.template.adapters.add("forceHidden", function(forceHidden, target) {
  return target.dataItem.get("depth") == 0 ? false : forceHidden;
});

// Set up labels
series.labels.template.setAll({
  fill: am5.color(0x000000),
  y: 30,
  oversizedBehavior: "none"
});

// Use adapter to leave central node label centered
series.labels.template.adapters.add("y", function(y, target) {
  return target.dataItem.get("depth") == 0 ? 0 : y;
});

// Use template.setup function to prep up node with an image
series.nodes.template.setup = function(target) {
  target.events.on("dataitemchanged", function(ev) {
    var icon = target.children.push(am5.Picture.new(root, {
      width: 30,
      height: 30,
      centerX: am5.percent(50),
      centerY: am5.percent(50),
      src: ev.target.dataItem.dataContext.image
    }));
  });
}

series.data.setAll([{
  name: "{{Auth::user()?->name}}",
  children: @json($user_referral_tree)
}]);

series.set("selectedDataItem", series.dataItems[0]);
</script>