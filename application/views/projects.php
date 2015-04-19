


<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
    var latitudes = [38.885516, 38.898537, 38.8507126, 38.84753];
    var longitudes = [-77.09327200000001, -77.13208299999997, -77.09903600000001, -77.06577290000001];

    function init_map(index) {
        var myLocation = new google.maps.LatLng(latitudes[index], longitudes[index]);
        var mapOptions = {
            center: myLocation,
            zoom: 16
        };
        var marker = new google.maps.Marker({
            position: myLocation,
            title: "Property Location"
        });
        var map = new google.maps.Map(document.getElementById("map"),
            mapOptions);
        marker.setMap(map);
    }

    init_map(0);
</script>

<style>
    .gmnoprint img {
        max-width: none;
    }

    .panel:hover {
        background-color: rgb(237, 245, 252);
    }

    .map {
        min-width: 300px;
        min-height: 470px;
        width: 100%;
        height: 100%;
    }

    img {
        max-width: 110%;
        height: auto;
    }

    .clearfix {
        clear: both;
    }

    .rowcolor {
        background-color: #CCCCCC;
    }

    .padall {
        padding: 10px;
    }

    .padbig {
        padding: 20px;
    }

    .icon {
        font-size: 23px;
        color: #197BB5;
    }
</style>
<div class="container">
       
                <div class="col-md-6">

                    <div class="panel panel-primary" onclick="javascript:init_map(1);">
                        <div class="row padall">
                            <div class="col-md-6">
                                <span></span>
                                <img src="holder.js/150x150" />
                            </div>
                            <div class="col-md-6">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <span class="fa fa-dollar icon">$385,000</span>
                                    </div>
                                    <div class="pull-right">
                                        1,135 SqFt | 2 Bedrooms | 2 Bathrooms                                
                                    </div>
                                </div>
                                <div>
                                    <h4><span class="fa fa-map-marker icon"></span>4195 S Four Mile Run Dr</h4>
                                    Build 2001. Fully refurbished.<span class="fa fa-search icon pull-right">   More</span>
                                </div>
                            </div>
                        </div>
                    </div>
               
               
                    <div class="panel panel-primary" onclick="return init_map(2);">
                        <div class="row padall">
                            <div class="col-md-6">
                                <span></span>
                                <img src="holder.js/150x150" />
                            </div>
                            <div class="col-md-6">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <span class="fa fa-dollar icon">675, 000</span>
                                    </div>
                                    <div class="pull-right">
                                        1,196 SqFt | 3 Bedrooms | 1 Bathroom                                
                                    </div>
                                </div>
                                <div>
                                    <h4><span class="fa fa-map-marker icon"></span>5108 24th St N</h4>
                                    Build 2011. Fully Furnished.<span class="fa fa-search icon pull-right">   More</span>
                                </div>
                            </div>
                        </div>
                    </div>
             
                    <div class="panel panel-primary" onclick="return init_map(3);">
                        <div class="row padall">
                            <div class="col-md-6">
                                <span></span>
                                <img src="holder.js/150x150" />
                            </div>
                            <div class="col-md-6">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <span class="fa fa-dollar icon">945,000</span>
                                    </div>
                                    <div class="pull-right">
                                        3,500 SqFt | 5 Bedrooms | 3 Bathrooms  
                                    </div>
                                </div>
                                <div>
                                    <h4><span class="fa fa-map-marker icon"></span>2717 S Arlington Ridge Rd</h4>
                                    Build 2012. Call for availability.<span class="fa fa-search icon pull-right">   More</span>
                                </div>
                            </div>
                        </div>

                    </div>
                
            
            </div>
        <div class="col-md-6">
            <div class="row padbig">
                <div id="map" class="map">
                </div>
            </div>
                </div>
        </div>
</div>
        