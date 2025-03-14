function getChartColorsArray(e) {
    var a = document.getElementById(e);
    if (a) {
        a = a.dataset.colors;
        if (a) return JSON.parse(a).map(e => {
            var a = e.replace(/\s/g, "");
            return a.includes(",") ? 2 === (e = e.split(",")).length ? `rgba(${getComputedStyle(document.documentElement).getPropertyValue(e[0])}, ${e[1]})` : a : getComputedStyle(document.documentElement).getPropertyValue(a) || a
        });
        console.warn("data-colors attribute not found on: " + e)
    }
}
var chartColumnDistributedChart = "",
    realizedRateChart = "",
    balanceOverviewChart = "",
    usersActivityChart = "",
    chartHeatMapShadesChart = "",
    chartSemiRadialbarChart = "";

function loadCharts() {
    (t = getChartColorsArray("performance_overview")) && (a = {
        series: [{
            name: "Website",
            type: "column",
            data: [30, 57, 25, 33, 20, 39, 47, 36, 22, 51, 38, 27, 38, 49, 42, 58, 33, 46, 40, 34, 41, 53, 19, 23, 36, 52, 58, 43]
        }, {
            name: "Social Media",
            type: "line",
            data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16, 33, 20, 39, 47, 36, 22, 51, 38, 27, 38, 49, 33, 20, 39, 47, 36]
        }],
        chart: {
            height: 350,
            type: "line",
            toolbar: {
                show: !1
            }
        },
        stroke: {
            width: [0, 2],
            curve: "smooth"
        },
        plotOptions: {
            bar: {
                columnWidth: "100%",
                borderRadiusOnAllStackedSeries: !0
            }
        },
        colors: t,
        dataLabels: {
            enabled: !1,
            enabledOnSeries: [1]
        },
        legend: {
            show: !1
        },
        grid: {
            xaxis: {
                lines: {
                    show: !1
                }
            },
            yaxis: {
                lines: {
                    show: !1
                }
            },
            padding: {
                top: 0,
                right: -8,
                left: -16
            }
        },
        yaxis: {
            show: !1
        },
        xaxis: {
            type: "datetime",
            categories: ["01/01/2023 GMT", "01/02/2023 GMT", "01/03/2023 GMT", "01/04/2023 GMT", "01/05/2023 GMT", "01/06/2023 GMT", "01/07/2023 GMT", "01/08/2023 GMT", "01/09/2023 GMT", "01/10/2023 GMT", "01/11/2023 GMT", "01/12/2023 GMT", "01/13/2023 GMT", "01/14/2023 GMT", "01/15/2023 GMT", "01/16/2023 GMT", "01/17/2023 GMT", "01/18/2023 GMT", "01/19/2023 GMT", "01/20/2023 GMT", "01/21/2023 GMT", "01/22/2023 GMT", "01/23/2023 GMT", "01/24/2023 GMT", "01/25/2023 GMT", "01/26/2023 GMT", "01/27/2023 GMT", "01/28/2023 GMT"],
            labels: {
                show: !1
            },
            axisTicks: {
                show: !1
            }
        }
    }, "" != chartColumnDistributedChart && chartColumnDistributedChart.destroy(), (chartColumnDistributedChart = new ApexCharts(document.querySelector("#performance_overview"), a)).render()), (t = getChartColorsArray("balance_overview")) && (a = {
        series: [{
            name: "Total Revenue",
            data: [49, 62, 55, 67, 73, 89, 110, 120, 115, 129, 123, 133]
        }, {
            name: "Total Expense",
            data: [62, 76, 67, 49, 63, 77, 70, 86, 92, 103, 87, 93]
        }, {
            name: "Profit Ratio",
            data: [12, 36, 29, 33, 37, 42, 58, 67, 49, 33, 24, 18]
        }],
        chart: {
            height: 320,
            type: "line",
            toolbar: {
                show: !1
            },
            dropShadow: {
                enabled: !0,
                enabledOnSeries: void 0,
                top: 0,
                left: 0,
                blur: 3,
                color: t,
                opacity: .25
            }
        },
        markers: {
            size: 0,
            strokeColors: t,
            strokeWidth: 2,
            strokeOpacity: .9,
            fillOpacity: 1,
            radius: 0,
            hover: {
                size: 5
            }
        },
        grid: {
            show: !0,
            padding: {
                top: -20,
                right: 0,
                bottom: 0
            }
        },
        legend: {
            show: !1
        },
        dataLabels: {
            enabled: !1
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            labels: {
                rotate: -90
            },
            axisTicks: {
                show: !0
            },
            axisBorder: {
                show: !0,
                stroke: {
                    width: 1
                }
            }
        },
        stroke: {
            width: [2, 2, 2],
            curve: "smooth"
        },
        colors: t
    }, "" != balanceOverviewChart && balanceOverviewChart.destroy(), (balanceOverviewChart = new ApexCharts(document.querySelector("#balance_overview"), a)).render()), (t = getChartColorsArray("realized_rate")) && (a = {
        series: [{
            name: "Read",
            data: [80, 50, 30, 40, 100, 20]
        }, {
            name: "Delivery",
            data: [20, 30, 40, 80, 20, 80]
        }, {
            name: "Failed",
            data: [44, 76, 78, 13, 43, 10]
        }],
        chart: {
            height: 403,
            type: "radar",
            toolbar: {
                show: !1
            }
        },
        stroke: {
            width: 1
        },
        fill: {
            opacity: .2
        },
        markers: {
            size: 3,
            hover: {
                size: 4
            }
        },
        tooltip: {
            y: {
                formatter: function(e) {
                    return e
                }
            }
        },
        colors: t,
        xaxis: {
            categories: ["2018", "2019", "2020", "2021", "2022", "2023"]
        }
    }, "" != realizedRateChart && realizedRateChart.destroy(), (realizedRateChart = new ApexCharts(document.querySelector("#realized_rate"), a)).render());

    function e(e, a) {
        for (var t = 0, r = []; t < e;) {
            var o = (t + 1).toString(),
                n = Math.floor(Math.random() * (a.max - a.min + 1)) + a.min;
            r.push({
                x: o,
                y: n
            }), t++
        }
        return r
    }(t = getChartColorsArray("usersActivity")) && (a = {
        series: [{
            name: "Created",
            data: [20, 17, 11, 15, 20, 15, 20]
        }, {
            name: "Converted",
            data: [13, 23, 18, 8, 27, 10, 12]
        }],
        chart: {
            type: "bar",
            height: 340,
            stacked: !0,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !0
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "35%"
            }
        },
        dataLabels: {
            enabled: !1
        },
        xaxis: {
            categories: ["Sun", "Mon", "Tue", "Wen", "Thu", "Fri", "Sat"]
        },
        grid: {
            show: !0,
            xaxis: {
                lines: {
                    show: !1
                }
            },
            padding: {
                top: -18,
                right: 0,
                bottom: 0
            }
        },
        legend: {
            position: "bottom"
        },
        fill: {
            opacity: 1
        },
        colors: t
    }, "" != usersActivityChart && usersActivityChart.destroy(), (usersActivityChart = new ApexCharts(document.querySelector("#usersActivity"), a)).render());
    var a, t;
    [{
        name: "W1",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W2",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W3",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W4",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W5",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W6",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W7",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W8",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W9",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W10",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W11",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W12",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W13",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W14",
        data: e(7, {
            min: 0,
            max: 90
        })
    }, {
        name: "W15",
        data: e(7, {
            min: 0,
            max: 90
        })
    }].reverse(), (t = getChartColorsArray("shades_heatmap")) && (a = {
        series: [{
            name: "7 AM",
            data: e(7, {
                min: 0,
                max: 90
            })
        }, {
            name: "8 AM",
            data: e(7, {
                min: 0,
                max: 90
            })
        }, {
            name: "9 AM",
            data: e(7, {
                min: 0,
                max: 90
            })
        }, {
            name: "10 AM",
            data: e(7, {
                min: 0,
                max: 90
            })
        }, {
            name: "11 AM",
            data: e(7, {
                min: 0,
                max: 90
            })
        }, {
            name: "12 PM",
            data: e(7, {
                min: 0,
                max: 90
            })
        }, {
            name: "1 PM",
            data: e(7, {
                min: 0,
                max: 90
            })
        }, {
            name: "2 PM",
            data: e(7, {
                min: 0,
                max: 90
            })
        }, {
            name: "3 PM",
            data: e(7, {
                min: 0,
                max: 90
            })
        }],
        chart: {
            height: 340,
            type: "heatmap",
            toolbar: {
                show: !1
            }
        },
        stroke: {
            width: 0
        },
        plotOptions: {
            heatmap: {
                radius: 2,
                enableShades: !1,
                colorScale: {
                    ranges: [{
                        from: 0,
                        to: 50,
                        color: t[0]
                    }, {
                        from: 51,
                        to: 100,
                        color: t[1]
                    }]
                }
            }
        },
        grid: {
            show: !0,
            xaxis: {
                lines: {
                    show: !1
                }
            },
            yaxis: {
                lines: {
                    show: !1
                }
            },
            padding: {
                top: -18,
                right: 0,
                bottom: 0
            }
        },
        stroke: {
            width: 3
        },
        dataLabels: {
            enabled: !1
        },
        xaxis: {
            categories: ["S", "M", "T", "W", "T", "F", "S"],
            type: "category"
        }
    }, "" != chartHeatMapShadesChart && chartHeatMapShadesChart.destroy(), (chartHeatMapShadesChart = new ApexCharts(document.querySelector("#shades_heatmap"), a)).render());
    (t = getChartColorsArray("semi_radialbar")) && (a = {
        series: [74.36],
        chart: {
            type: "radialBar",
            height: 350,
            offsetY: -20,
            sparkline: {
                enabled: !0
            }
        },
        plotOptions: {
            radialBar: {
                startAngle: -90,
                endAngle: 90,
                track: {
                    background: "#e7e7e7",
                    strokeWidth: "97%",
                    margin: 5
                },
                dataLabels: {
                    name: {
                        show: !1
                    },
                    value: {
                        offsetY: -2,
                        fontSize: "22px"
                    }
                }
            }
        },
        grid: {
            padding: {
                top: -10
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                shade: "light",
                shadeIntensity: .4,
                inverseColors: !1,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 50, 53, 91]
            }
        },
        labels: ["Average Results"],
        colors: t
    }, "" != chartSemiRadialbarChart && chartSemiRadialbarChart.destroy(), (chartSemiRadialbarChart = new ApexCharts(document.querySelector("#semi_radialbar"), a)).render())
}
window.addEventListener("resize", function() {
    setTimeout(() => {
        loadCharts()
    }, 250)
}), loadCharts();
var options = {
        valueNames: ["source", "impression", "clicks", "cost", "conversation"]
    },
    contactList = new List("contactList", options).on("updated", function(e) {
        0 == e.matchingItems.length ? document.getElementsByClassName("noresult")[0].style.display = "block" : document.getElementsByClassName("noresult")[0].style.display = "none", 0 < e.matchingItems.length ? document.getElementsByClassName("noresult")[0].style.display = "none" : document.getElementsByClassName("noresult")[0].style.display = "block"
    }),
    sorttableDropdown = document.querySelectorAll(".sortble-dropdown");
sorttableDropdown && sorttableDropdown.forEach(function(t) {
    t.querySelectorAll(".dropdown-menu .dropdown-item").forEach(function(a) {
        a.addEventListener("click", function() {
            var e = a.innerHTML;
            t.querySelector(".dropdown-title").innerHTML = e
        })
    })
});