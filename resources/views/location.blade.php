@extends('layouts.default')

@section('js')
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=NQamyxqQBQWvhCsjryqCXfZGMG6EPVBn"></script>
@stop

@section('content')
    <div id="location">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-4">
                    <h1>公司地址</h1>
                    <p>
                        四川省成都市武侯区南二段 1 号<br>
                        数码科技大厦 8 楼 817<br>
                        邮编：665842<br>
                        电话：028-61111556<br>
                    </p>
                </div>
                <div class="col-12 col-xl-8" style="min-height: 350px;">
                    <!--百度地图容器-->
                    <div style="width:100%;height:100%;border:#ccc solid 1px;font-size:12px" id="map"></div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script type="text/javascript">
        //创建和初始化地图函数：
        function initMap(){
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMapOverlay();//向地图添加覆盖物
        }
        function createMap(){
            map = new BMap.Map("map");
            map.centerAndZoom(new BMap.Point(104.084225,30.641593),16);
        }
        function setMapEvent(){
            map.enableScrollWheelZoom();
            map.enableKeyboard();
            map.enableDragging();
            map.enableDoubleClickZoom()
        }
        function addClickHandler(target,window){
            target.addEventListener("click",function(){
                target.openInfoWindow(window);
            });
        }
        function addMapOverlay(){
            var markers = [
                {content:"金信佳业",title:"金信佳业",imageOffset: {width:0,height:3},position:{lat:30.640179,lng:104.082267}}
            ];
            for(var index = 0; index < markers.length; index++ ){
                var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
                var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                        imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
                    })});
                var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
                var opts = {
                    width: 200,
                    title: markers[index].title,
                    enableMessage: false
                };
                var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
                marker.setLabel(label);
                addClickHandler(marker,infoWindow);
                map.addOverlay(marker);
            };
        }
        //向地图添加控件
        function addMapControl(){
            var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
            scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
            map.addControl(scaleControl);
            var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
            map.addControl(navControl);
            var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
            map.addControl(overviewControl);
        }
        var map;
        initMap();
    </script>
@stop
