<div class="footer">
    <div class="py-4 px-5">
        <% with $SiteConfig %>
            <% if $SocialIcons %>
                <div class="social-icons">
                    <div class="footer-heading">
                        Social Media
                    </div>
                    <% loop $SocialIcons %>
                        <a href="$LinkURL" {$TargetAttr}><i class="$Icon pr-3"></i></a>
                    <% end_loop %>
                </div>
            <% end_if %>
        <% end_with %>
    </div>
</div>
