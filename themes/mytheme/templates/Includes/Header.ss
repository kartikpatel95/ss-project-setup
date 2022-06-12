<div class="header <% if $FullPageBanner %>full-page-banner<% else %>non-full-page-banner<% end_if%>"
     style="
         <% if $Banner %>
             background: url($Banner.URL);
             background-position: 50% 50%;
             background-size: cover;
             background-repeat: no-repeat;
             background-attachment: fixed;
        <% end_if %>">
    <div class="container h-100">
        <div class="d-flex justify-content-between">
            <% with $SiteConfig %>
                <div class="site-logo">
                    $Logo
                </div>
            <% end_with %>
            <% include Navigation %>
        </div>
        <% if $BannerMessage %>
            <div class="page-title">
                <h1>$BannerMessage</h1>
            </div>
        <% end_if %>
    </div>
</div>
