<ul class="navbar-nav">

    <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="{{ route('dashboard') }}" id="topnav-dashboard" role="button">
            <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">{{ _lang('Dashboard') }}</span> <div class="arrow-down"></div>
        </a>
    </li>
    
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
            >
            <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">{{ _lang('Contacts') }}</span> <div class="arrow-down"></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
            <a class="dropdown-item" href="{{ route('contacts.index') }}">{{ _lang('Contacts List') }}</a>
            <a class="dropdown-item" href="{{ route('contacts.create') }}">{{ _lang('Add New') }}</a>
            <a class="dropdown-item" href="{{ route('contact_groups.index') }}">{{ _lang('Contact Group') }}</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
            >
            <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">{{ _lang('Accounts') }}</span> <div class="arrow-down"></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
            <a class="dropdown-item" href="{{ route('accounts.index') }}">{{ _lang('All Account') }}</a>
            <a class="dropdown-item" href="{{ route('accounts.create') }}">{{ _lang('Add New Account') }}</a>
        </div>
    </li>

    <li class="nav-item dropdown" id="transactions">
        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
            >
            <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">{{ _lang('Transactions') }}</span> <div class="arrow-down"></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
            {{--    
            <a class="dropdown-item" href="{{ route('income.index') }}">{{ _lang('Income/Deposit') }}</a>
            <a class="dropdown-item" href="{{ route('transfer.create') }}">{{ _lang('Transfer') }}</a> 
            <a class="dropdown-item" href="{{ route('income.income_calendar') }}">{{ _lang('Income Calendar') }}</a>
            <a class="dropdown-item" href="{{ route('repeating_income.create') }}">{{ _lang('Add Repeating Income') }}</a>
            <a class="dropdown-item" href="{{ route('repeating_income.index') }}">{{ _lang('Repeating Income List') }}</a>
            --}}  
            <a class="dropdown-item" href="{{ route('expense.index') }}">{{ _lang('Expense') }}</a>
            <a class="dropdown-item" href="{{ route('expense.expense_calendar') }}">{{ _lang('Expense Calendar') }}</a>
            <a class="dropdown-item" href="{{ route('repeating_expense.create') }}">{{ _lang('Add Repeating Expense') }}</a>
            <a class="dropdown-item" href="{{ route('repeating_expense.index') }}">{{ _lang('Repeating Expense List') }}</a>
            <a class="dropdown-item" href="{{ route('chart_of_accounts.index') }}">{{ _lang('Income & Expense Types') }}</a>
            <a class="dropdown-item" href="{{ route('payment_methods.index') }}">{{ _lang('Payment Methods') }}</a>
            <a class="dropdown-item" href="{{ route('taxs.index') }}">{{ _lang('Tax Settings') }}</a>
        </div>
    </li>

    <li class="nav-item dropdown" id="reports">
        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
            >
            <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">{{ _lang('Reports') }}</span> <div class="arrow-down"></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
            <a class="dropdown-item" href="{{ route('reports.account_statement') }}">{{ _lang('Account Statement') }}</a>
            <a class="dropdown-item" href="{{ route('reports.income_report') }}">{{ _lang('Income Report') }}</a>
            <a class="dropdown-item" href="{{ route('reports.expense_report') }}">{{ _lang('Expense Report') }}</a>
            <a class="dropdown-item" href="{{ route('reports.transfer_report') }}">{{ _lang('Transfer Report') }}</a>
            <a class="dropdown-item" href="{{ route('reports.income_vs_expense') }}">{{ _lang('Income VS Expense') }}</a>
            <a class="dropdown-item" href="{{ route('reports.report_by_payer') }}">{{ _lang('Report by Payer') }}</a>
            <a class="dropdown-item" href="{{ route('reports.report_by_payee') }}">{{ _lang('Report by Payee') }}</a>
        </div>
    </li>

    {{-- Modelo de Menu com 3 níveis --}}
    <li class="nav-item dropdown" hidden>
        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
            >
            <i class="bx bx-tone me-2"></i>
            <span key="t-ui-elements"> UI_Elements</span> 
            <div class="arrow-down"></div>
        </a>

        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
            aria-labelledby="topnav-uielement">
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <a href="ui-alerts.php" class="dropdown-item" key="t-alerts">Alerts</a>
                        <a href="ui-buttons.php" class="dropdown-item" key="t-buttons">Buttons</a>
                        <a href="ui-cards.php" class="dropdown-item" key="t-cards">Cards</a>
                        <a href="ui-carousel.php" class="dropdown-item" key="t-carousel">Carousel</a>
                        <a href="ui-dropdowns.php" class="dropdown-item" key="t-dropdowns">Dropdowns</a>
                        <a href="ui-grid.php" class="dropdown-item" key="t-grid">Grid</a>
                        <a href="ui-images.php" class="dropdown-item" key="t-images">Images</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div>
                        <a href="ui-lightbox.php" class="dropdown-item" key="t-lightbox">Lightbox</a>
                        <a href="ui-modals.php" class="dropdown-item" key="t-modals">Modals</a>
                        <a href="ui-rangeslider.php" class="dropdown-item" key="t-range-slider">Range_Slider</a>
                        <a href="ui-session-timeout.php" class="dropdown-item" key="t-session-timeout">Session_Timeout</a>
                        <a href="ui-progressbars.php" class="dropdown-item" key="t-progress-bars">Progress_Bars</a>
                        <a href="ui-sweet-alert.php" class="dropdown-item" key="t-sweet-alert">Sweet_Alert</a>
                        <a href="ui-tabs-accordions.php" class="dropdown-item" key="t-tabs-accordions">Tabs_&_Accordions</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div>
                        <a href="ui-typography.php" class="dropdown-item" key="t-typography">Typography</a>
                        <a href="ui-video.php" class="dropdown-item" key="t-video">Video</a>
                        <a href="ui-general.php" class="dropdown-item" key="t-general">General</a>
                        <a href="ui-colors.php" class="dropdown-item" key="t-colors">Colors</a>
                        <a href="ui-rating.php" class="dropdown-item" key="t-rating">Rating</a>
                        <a href="ui-notifications.php" class="dropdown-item" key="t-notifications">Notifications</a>
                    </div>
                </div>
            </div>

        </div>
    </li>

</ul>

<div hidden>
    <div class="sb-sidenav-menu-heading">{{ _lang('NAVIGATIONS') }}</div>


<a class="nav-link" href="{{ route('products.index') }}">
    <div class="sb-nav-link-icon"><i class="ti-shopping-cart"></i></div>
    {{ _lang('Products') }}
</a>

<a class="nav-link" href="{{ route('services.index') }}">
    <div class="sb-nav-link-icon"><i class="ti-agenda"></i></div>
    {{ _lang('Services') }}
</a>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#suppliers" aria-expanded="false"
    aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="ti-truck"></i></div>
    {{ _lang('Supplier') }}
    <div class="sb-sidenav-collapse-arrow"><i class="ti-angle-down"></i></div>
</a>
<div class="collapse" id="suppliers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="{{ route('suppliers.index') }}">{{ _lang('Supplier List') }}</a>
        <a class="nav-link" href="{{ route('suppliers.create') }}">{{ _lang('Add New') }}</a>
    </nav>
</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#purchase_orders" aria-expanded="false"
    aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="ti-bag"></i></div>
    {{ _lang('Purchase') }}
    <div class="sb-sidenav-collapse-arrow"><i class="ti-angle-down"></i></div>
</a>
<div class="collapse" id="purchase_orders" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="{{ route('purchase_orders.index') }}">{{ _lang('Purchase Orders') }}</a>
        <a class="nav-link" href="{{ route('purchase_orders.create') }}">{{ _lang('New Purchase Order') }}</a>
    </nav>
</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#purchase_returns" aria-expanded="false"
    aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="ti-back-left"></i></div>
    {{ _lang('Return') }}
    <div class="sb-sidenav-collapse-arrow"><i class="ti-angle-down"></i></div>
</a>
<div class="collapse" id="purchase_returns" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="{{ route('purchase_returns.index') }}">{{ _lang('Purchase Return') }}</a>
        <a class="nav-link" href="{{ route('sales_returns.index') }}">{{ _lang('Sales Return') }}</a>
    </nav>
</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sales" aria-expanded="false"
    aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="ti-shopping-cart-full"></i></div>
    {{ _lang('Sales') }}
    <div class="sb-sidenav-collapse-arrow"><i class="ti-angle-down"></i></div>
</a>
<div class="collapse" id="sales" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="{{ route('invoices.create') }}">{{ _lang('Create Invoice') }}</a>
        <a class="nav-link" href="{{ route('invoices.index') }}">{{ _lang('Invoice List') }}</a>
        <a class="nav-link" href="{{ route('quotations.create') }}">{{ _lang('Create Quotation') }}</a>
        <a class="nav-link" href="{{ route('quotations.index') }}">{{ _lang('Quotation List') }}</a>
    </nav>
</div>

<div class="sb-sidenav-menu-heading">{{ _lang('Company Settings') }}</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#staffs" aria-expanded="false"
    aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="ti-user"></i></div>
    {{ _lang('Staff Management') }}
    <div class="sb-sidenav-collapse-arrow"><i class="ti-angle-down"></i></div>
</a>
<div class="collapse" id="staffs" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="{{ route('staffs.index') }}">{{ _lang('All Staff') }}</a>
        <a class="nav-link" href="{{ route('staffs.create') }}">{{ _lang('Add New') }}</a>
        <a class="nav-link" href="{{ route('roles.index') }}">{{ _lang('Staff Roles') }}</a>
        <a class="nav-link" href="{{ route('permission.index') }}">{{ _lang('Access Control') }}</a>
    </nav>
</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#company_settings" aria-expanded="false"
    aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="ti-settings"></i></div>
    {{ _lang('Company Settings') }}
    <div class="sb-sidenav-collapse-arrow"><i class="ti-angle-down"></i></div>
</a>
<div class="collapse" id="company_settings" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="{{ route('company.change_settings') }}">{{ _lang('Company Settings') }}</a>
        <a class="nav-link" href="{{ route('company_email_template.index') }}">{{ _lang('Email Template') }}</a>
        <a class="nav-link" href="{{ route('product_units.index') }}">{{ _lang('Product Unit') }}</a>
    </nav>
</div>




</div>

