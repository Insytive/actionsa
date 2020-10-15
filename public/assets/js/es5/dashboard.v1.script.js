'use strict';

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

$(document).ready(function () {

    // Chart in Dashboard version 1
    var echartElemBar = document.getElementById('echartBar');
    if (echartElemBar) {
        var echartBar = echarts.init(echartElemBar);
        echartBar.setOption({
            legend: {
                borderRadius: 0,
                orient: 'horizontal',
                x: 'right',
                data: ['Online', 'Offline']
            },
            grid: {
                left: '8px',
                right: '8px',
                bottom: '0',
                containLabel: true
            },
            tooltip: {
                show: true,
                backgroundColor: 'rgba(0, 0, 0, .8)'
            },
            xAxis: [{
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                axisTick: {
                    alignWithLabel: true
                },
                splitLine: {
                    show: false
                },
                axisLine: {
                    show: true
                }
            }],
            yAxis: [{
                type: 'value',
                axisLabel: {
                    formatter: '{value}'
                },
                min: 0,
                max: 100000,
                interval: 25000,
                axisLine: {
                    show: false
                },
                splitLine: {
                    show: true,
                    interval: 'auto'
                }
            }],

            series: [{
                name: 'Online',
                data: [35000, 69000, 22500, 60000, 50000, 50000, 30000, 80000, 70000, 60000, 20000, 30005],
                label: { show: false, color: '#0168c1' },
                type: 'bar',
                barGap: 0,
                color: '#4afa5b',
                smooth: true,
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowOffsetY: -2,
                        shadowColor: 'rgba(0, 0, 0, 0.3)'
                    }
                }
            }, {
                name: 'Offline',
                data: [45000, 82000, 35000, 93000, 71000, 89000, 49000, 91000, 80200, 86000, 35000, 40050],
                label: { show: false, color: '#639' },
                type: 'bar',
                color: '#05B616',
                smooth: true,
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowOffsetY: -2,
                        shadowColor: 'rgba(0, 0, 0, 0.3)'
                    }
                }
            }]
        });
        $(window).on('resize', function () {
            setTimeout(function () {
                echartBar.resize();
            }, 500);
        });
    }

    // Chart in Dashboard version 1
    var echartElemPie = document.getElementById('echartPie');
    if (echartElemPie) {
        var echartPie = echarts.init(echartElemPie);
        echartPie.setOption({
            color: ['#049d13', '#06dc1b', '#049011', '#05b616', '#06cf19', '#06c918', '#11f827', '#37fa4a', '#5dfb6c'],
            tooltip: {
                show: true,
                backgroundColor: 'rgba(0, 0, 0, .8)'
            },

            series: [{
                name: 'Leads by province',
                type: 'pie',
                radius: '60%',
                center: ['50%', '50%'],
                data: [{ value: 335, name: 'KZN' }, { value: 200, name: 'LP' },  { value: 186, name: 'EC' },  { value: 310, name: 'EC' }, { value: 234, name: 'WC' }, { value: 155, name: 'FS' }, { value: 130, name: 'MP' }, { value: 152, name: 'NW' }, { value: 196, name: 'GT' }],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        });
        $(window).on('resize', function () {
            setTimeout(function () {
                echartPie.resize();
            }, 500);
        });
    }

    // Chart in Dashboard version 1
    var echartElem1 = document.getElementById('echart1');
    if (echartElem1) {
        var echart1 = echarts.init(echartElem1);
        echart1.setOption(_extends({}, echartOptions.lineFullWidth, {
            series: [_extends({
                data: [30, 40, 20, 50, 40, 80, 90]
            }, echartOptions.smoothLine, {
                markArea: {
                    label: {
                        show: true
                    }
                },
                areaStyle: {
                    color: 'rgba(102, 51, 153, .2)',
                    origin: 'start'
                },
                lineStyle: {
                    color: '#05B616'
                },
                itemStyle: {
                    color: '#05B616'
                }
            })]
        }));
        $(window).on('resize', function () {
            setTimeout(function () {
                echart1.resize();
            }, 500);
        });
    }
    // Chart in Dashboard version 1
    var echartElem2 = document.getElementById('echart2');
    if (echartElem2) {
        var echart2 = echarts.init(echartElem2);
        echart2.setOption(_extends({}, echartOptions.lineFullWidth, {
            series: [_extends({
                data: [30, 10, 40, 10, 40, 20, 90]
            }, echartOptions.smoothLine, {
                markArea: {
                    label: {
                        show: true
                    }
                },
                areaStyle: {
                    color: 'rgba(255, 193, 7, 0.2)',
                    origin: 'start'
                },
                lineStyle: {
                    color: '#05b616'
                },
                itemStyle: {
                    color: '#4afa5b'
                }
            })]
        }));
        $(window).on('resize', function () {
            setTimeout(function () {
                echart2.resize();
            }, 500);
        });
    }
    // Chart in Dashboard version 1
    var echartElem3 = document.getElementById('echart3');
    if (echartElem3) {
        var echart3 = echarts.init(echartElem3);
        echart3.setOption(_extends({}, echartOptions.lineNoAxis, {
            series: [{
                data: [40, 80, 20, 90, 30, 80, 40, 90, 20, 80, 30, 45, 50, 110, 90, 145, 120, 135, 120, 140],
                lineStyle: _extends({
                    color: '#4afa5b',
                    width: 3
                }, echartOptions.lineShadow),
                label: { show: true, color: '#212121' },
                type: 'line',
                smooth: true,
                itemStyle: {
                    borderColor: '#4afa5b'
                }
            }]
        }));
        $(window).on('resize', function () {
            setTimeout(function () {
                echart3.resize();
            }, 500);
        });
    }
});