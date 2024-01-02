<header class="app-brand d-flex flex-column align-items-center">
    <a
        class="app-brand__link"
        href="$AbsoluteBaseURL"
        title="<%t SilverStripe\LoginForms.BackToHomePage "Go back to homepage" %>"
    >
        <% include AppBrand %>

        <h1 class="app-brand__name">
            $SiteConfig.Title
            <% if not $SiteConfig.Title %>SilverStripe<% end_if %>
        </h1>
    </a>
    <% if $SiteConfig.LoginPageContent %>
        <div class="mt-4 app-brand__link">
            $SiteConfig.LoginPageContent
        </div>
    <% end_if %>
</header>