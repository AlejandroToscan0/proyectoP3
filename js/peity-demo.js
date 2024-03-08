$(function() {
    $("span.pie").peity("pie", {
        fill: ['#642673', '#dcddde', '#ffffff']
    })

    $(".line").peity("line",{
        fill: '#642673',
        stroke:'#4f2460',
    })

    $(".bar").peity("bar", {
        fill: ["#642673", "#dcddde"]
    })

    $(".bar_dashboard").peity("bar", {
        fill: ["#642673", "#dcddde"],
        width:100
    })

    var updatingChart = $(".updating-chart").peity("line", { fill: '#642673',stroke:'#4f2460', width: 64 })

    setInterval(function() {
        var random = Math.round(Math.random() * 10)
        var values = updatingChart.text().split(",")
        values.shift()
        values.push(random)

        updatingChart
            .text(values.join(","))
            .change()
    }, 1000);

});
