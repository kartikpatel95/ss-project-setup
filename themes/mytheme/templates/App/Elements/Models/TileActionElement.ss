<div class="tile-action">
    <div class="container">
        <div class="row">
            <% if $TileActions %>
                <% loop $TileActions %>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <a href="$LinkURL" class="link">
                            <div class="tile-image" style="background: url($Figure.URL);">
                                <% if $Title %>
                                    <div class="title">$Title</div>
                                <% end_if %>
                            </div>
                        </a>
                    </div>
                <% end_loop %>
            <% end_if %>
        </div>
    </div>
</div>