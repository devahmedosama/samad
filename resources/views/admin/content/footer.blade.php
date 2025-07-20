</div> <!-- content -->

                <footer class="footer">
                    © 2018 Annex by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ URL::to('assets/admin') }}/js/jquery.min.js"></script>
        <script src="{{ URL::to('assets/admin') }}/js/popper.min.js"></script>
        <script src="{{ URL::to('assets/admin') }}/js/bootstrap.min.js"></script>
        <script src="{{ URL::to('assets/admin') }}/js/modernizr.min.js"></script>
        <script src="{{ URL::to('assets/admin') }}/js/detect.js"></script>
        <script src="{{ URL::to('assets/admin') }}/js/fastclick.js"></script>
        <script src="{{ URL::to('assets/admin') }}/js/jquery.slimscroll.js"></script>
        <script src="{{ URL::to('assets/admin') }}/js/jquery.blockUI.js"></script>
        <script src="{{ URL::to('assets/admin') }}/js/waves.js"></script>
        <script src="{{ URL::to('assets/admin') }}/js/jquery.nicescroll.js"></script>
        <script src="{{ URL::to('assets/admin') }}/js/jquery.scrollTo.min.js"></script>

        <script src="{{ URL::to('assets/admin') }}/plugins/skycons/skycons.min.js"></script>
        <script src="{{ URL::to('assets/admin') }}/plugins/raphael/raphael-min.js"></script>
        <script src="{{ URL::to('assets/admin') }}/plugins/morris/morris.min.js"></script>
        
        <script src="{{ URL::to('assets/admin') }}/pages/dashborad.js"></script>

        <!-- App js -->
        <script src="{{ URL::to('assets/admin') }}/js/app.js"></script>
        <script>
             /* BEGIN SVG WEATHER ICON */
             if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };

        // scroll

        $(document).ready(function() {
        
        $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
        $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
        
        });
        </script>

    </body>
</html>