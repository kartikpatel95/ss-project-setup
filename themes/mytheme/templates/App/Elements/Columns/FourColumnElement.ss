<div class="four-column-block">
    <div class="container">
        <% if $ShowTitle && $Title %>
            <div class="col-title">
                <h2>$Title</h2>
            </div>
        <% end_if %>

        <div class="row">
            <% if $LeftColumn %>
                <div class="col-md-6 col-lg-3 pb-3 mx-auto">
                    <% loop $LeftColumn %>
                        $Me
                    <% end_loop %>
                </div>
            <% end_if %>

            <% if $MiddleLeft %>
                <div class="col-md-6 col-lg-3 pb-3 mx-auto">
                    <% loop $MiddleLeft %>
                        $Me
                    <% end_loop %>
                </div>
            <% end_if %>

            <% if $MiddleRight %>
                <div class="col-md-6 col-lg-3 pb-3 mx-auto">
                    <% loop $MiddleRight %>
                        $Me
                    <% end_loop %>
                </div>
            <% end_if %>

            <% if $RightColumn %>
                <div class="col-md-6 col-lg-3 pb-3 mx-auto">
                    <% loop $RightColumn %>
                        $Me
                    <% end_loop %>
                </div>
            <% end_if %>
        </div>
    </div>
</div>
