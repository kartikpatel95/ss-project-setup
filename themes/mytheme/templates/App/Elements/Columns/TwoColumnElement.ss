<div class="two-column-bock">
    <div class="container">
        <% if $ShowTitle && $Title %>
            <div class="col-title">
                <h2>$Title</h2>
            </div>
        <% end_if %>

        <div class="row">
            <% if $LeftColumn %>
                <div class="col-md-6 pb-3 mx-auto">
                    <% loop $LeftColumn %>
                        $Me
                    <% end_loop %>
                </div>
            <% end_if %>

            <% if $RightColumn %>
                <div class="col-md-6 pb-3 mx-auto">
                    <% loop $RightColumn %>
                        $Me
                    <% end_loop %>
                </div>
            <% end_if %>
        </div>
    </div>
</div>
