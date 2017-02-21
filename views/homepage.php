    <div class="Content" id="data">

        <div id="tab-0" class="col s12">


            <div class="Search z-depth-1 hide-on-med-and-down ui-colors green">

                <div class="input-field Search-field">
                    <i class="material-icons small prefix Search-trigger">search</i>
                    <i class="material-icons small prefix Search-remove">close</i>
                    <input id="search-tab-1" type="text" class="Search-input" />
                    <label for="search-tab-1">Filter by Company name</label>
                </div>

                <!--div class="Filters">
                    <ul class="Filters-list">
                        <li class="Filters-item">
                            <span class="chip Filters-itemFilter has-data" data-filter="expiration">Soon to expire</span>
                        </li>
                        <li class="Filters-item">
                            <span class="chip Filters-itemFilter">Without ownership</span>
                        </li>
                        <li class="Filters-item">
                            <span class="chip Filters-itemFilter">Recently changed ownership</span>
                        </li>
                    </ul>
                </div-->

            </div>

            <div class="Data is-loading">

                <div class="Data-holder">

                    <div class="List List--main z-depth-1" data-level="0">
                        <div class="List-header ui-colors green">
                            <span class="hide-on-large-only List-back"><i class="material-icons">keyboard_arrow_left</i></span>
                            <span>Companies <span class="List-count"></span></span>
                        </div>


                        <div class="Search Search--mobile hide-on-large-only ui-colors green">

                            <!--div class="Filters Filters--mobile">
                                <i class="material-icons small Filters-trigger js-dropdown-trigger" data-beloworigin="true" data-activates='filters1'>filter_list</i>
                                <ul class="Filters-list z-depth-1" id="filters1">
                                    <li class="Filters-item">
                                        <span class="chip Filters-itemFilter has-data" data-filter="expiration">Soon to expire <i class="material-icons Filters-remove">close</i></span>
                                    </li>
                                    <li class="Filters-item">
                                        <span class="chip Filters-itemFilter" data-filter="ownership">Without ownership <i class="material-icons Filters-remove">close</i></span>
                                    </li>
                                    <li class="Filters-item">
                                        <span class="chip Filters-itemFilter" data-filter="changedOwnership">Recently changed ownership <i class="material-icons Filters-remove">close</i></span>
                                    </li>
                                </ul>
                            </div-->

                            <div class="Filters-active"></div>

                            <div class="input-field Search-field">
                                <i class="material-icons small prefix Search-trigger">search</i>
                                <i class="material-icons small prefix Search-remove">close</i>
                                <input id="search-tab-1" type="text" class="Search-input" />
                                <label for="search-tab-1">Filter by licence</label>
                            </div>

                        </div>

                        <div class="List-holder is-filterable">
                            <ul class="collection">
                            </ul>
                        </div>

                    </div>

                    <div class="List List--extra z-depth-1 u-isHidden" data-level="1">
                        <div class="List-header ui-colors green">
                            <div class="List-headerActive">
                                <span class="hide-on-large-only List-back"><i class="material-icons">keyboard_arrow_left</i></span>
                                <span>Mines <span class="List-count"></span></span>
                            </div>
                        </div>


                        <div class="List-holder">
                            <p class="List-headerInactive">
                                Select a company on the left to see the mines they own
                            </p>
                            <ul class="collection collapsible" data-collapsible="accordion">
                            </ul>
                        </div>
                    </div>

                    <div class="List List--info z-depth-1 hide-on-large-only" data-level="2">
                        <div class="List-header ui-colors green">
                            <div class="List-headerActive">
                                <span class="hide-on-large-only List-back"><i class="material-icons">keyboard_arrow_left</i></span>
                            </div>
                        </div>

                        <div class="List-holder">
                            <div class="Table row"></div>
                            <a class="waves-effect waves-light btn orange Download-button"><i class="material-icons right">file_download</i>Download data</a>
                        </div>
                    </div>

                </div>

                <div class="Map Map--0 companies"></div>

                <div class="Loader">
                    <div class="Loader-holder">
                        <div class="preloader-wrapper big active"> <div class="spinner-layer spinner-blue-only"> <div class="circle-clipper left"> <div class="circle"></div> </div><div class="gap-patch"> <div class="circle"></div> </div><div class="circle-clipper right"> <div class="circle"></div> </div> </div> </div>
                    </div>
                </div>

            </div>




            <script type="x-tmpl-mustache" class="main-tpl">
                <li class="collection-item" data-id="{{ id }}" data-table="{{ table }}">
                    <p class="List-title">{{ title }}</p>
                </li>
            </script>


            <script type="x-tmpl-mustache" class="extra-tpl">
                <li{{#active}} class="active"{{/active}}>
                    {{#minesInfo}}
                        <div class="collapsible-header{{#active}} active{{/active}}">
                            <div class="List-title">{{ mine_name }}</div>
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                        <div class="collapsible-body"{{#active}} style="display: block;"{{/active}}>

                            <ul>
                                <li>
                                    <p><strong>Mine region:</strong> {{mine_region}}{{^mine_region}}<i>unknown</i>{{/mine_region}}</p>
                                    <p><strong>Mine status:</strong> {{mine_status}}{{^mine_status}}<i>unknown</i>{{/mine_status}}</p>
                                </li>
                            </ul>
                            <p class="List-switch" data-to="mines" data-id="{{ mine_id }}"><i class="material-icons">info</i></p>
                        </div>
                    {{/minesInfo}}
                </li>
            </script>



        </div>

        <div id="tab-1" class="col s12 tab-content">

            <div class="Search z-depth-1 hide-on-med-and-down ui-colors green">

                <div class="input-field Search-field">
                    <i class="material-icons small prefix Search-trigger">search</i>
                    <i class="material-icons small prefix Search-remove">close</i>
                    <input id="search-tab-2" type="text" class="Search-input" />
                    <label for="search-tab-2">Filter by Mine</label>
                </div>

                <!--div class="Filters">
                    <ul class="Filters-list">
                        <li class="Filters-item">
                            <span class="chip Filters-itemFilter" data-filter="expiration">Foreign Owned</span>
                        </li>
                        <li class="Filters-item">
                            <span class="chip Filters-itemFilter">Namibian Owned</span>
                        </li>
                    </ul>
                </div-->

            </div>

            <div class="Data is-loading">

                <div class="Data-holder">

                    <div class="List List--main z-depth-1" data-level="0">
                        <div class="List-header ui-colors green">
                            <span class="hide-on-large-only List-back"><i class="material-icons">keyboard_arrow_left</i></span>
                            <span>Mines <span class="List-count"></span></span>
                        </div>


                        <div class="Search Search--mobile hide-on-large-only brand green">

                            <!--div class="Filters Filters--mobile">
                                <i class="material-icons small Filters-trigger js-dropdown-trigger" data-beloworigin="true" data-activates='filters2'>filter_list</i>
                                <ul class="Filters-list z-depth-1" id="filters2">
                                    <li class="Filters-item">
                                        <span class="chip Filters-itemFilter" data-filter="expiration">Foreign Owned <i class="material-icons Filters-remove">close</i></span>
                                    </li>
                                    <li class="Filters-item">
                                        <span class="chip Filters-itemFilter" data-filter="ownership">Namibian Owned <i class="material-icons Filters-remove">close</i></span>
                                    </li>
                                </ul>
                            </div-->

                            <div class="Filters-active"></div>

                            <div class="input-field Search-field">
                                <i class="material-icons small prefix Search-trigger">search</i>
                                <i class="material-icons small prefix Search-remove">close</i>
                                <input id="search-tab-1" type="text" class="Search-input" />
                                <label for="search-tab-1">Filter by Mine</label>
                            </div>

                        </div>

                        <div class="List-holder">
                            <ul class="collection">
                            </ul>
                        </div>

                    </div>

                    <div class="List List--extra z-depth-1 u-isHidden" data-level="1">
                        <div class="List-header ui-colors green">
                            <div class="List-headerActive">
                                <span class="hide-on-large-only List-back"><i class="material-icons">keyboard_arrow_left</i></span>
                                <span>Companies in ownership <span class="List-count"></span></span>
                            </div>
                        </div>

                        <div class="List-holder is-filterable">
                            <p class="List-headerInactive">
                                Select a mine on the left to see company information
                            </p>
                            <ul class="collection collapsible" data-collapsible="accordion">
                            </ul>
                            <div class="Map Map--1 Map--inline companies hide-on-large-only"></div>
                            <div class="Table row hide-on-large-only"></div>
                            <div class="OwnedLicenses row hide-on-large-only"></div>
                            <div class="Hierarchy row hide-on-large-only"></div>
                            <a class="waves-effect waves-light btn orange hide-on-large-only Download-button"><i class="material-icons right">file_download</i>Download data</a>
                        </div>
                    </div>

                </div>

                <div class="Map Map--1 mines"></div>


                <div class="Loader">
                    <div class="Loader-holder">
                        <div class="preloader-wrapper big active"> <div class="spinner-layer spinner-blue-only"> <div class="circle-clipper left"> <div class="circle"></div> </div><div class="gap-patch"> <div class="circle"></div> </div><div class="circle-clipper right"> <div class="circle"></div> </div> </div> </div>
                    </div>
                </div>

            </div>


            <script type="x-tmpl-mustache" class="main-tpl">
                <li class="collection-item" data-id="{{ id }}" data-table="{{table}}" data-hierarchy="{{ hierarchy }}" data-ownedLicenses="{{ ownedLicenses }}">
                    <p class="List-title">{{ title }}</p>
                </li>
            </script>

            <script type="x-tmpl-mustache" class="extra-tpl">
                <li{{#active}} class="active"{{/active}}>
                    {{#companyInfo}}
                        <div class="collapsible-header{{#active}} active{{/active}}">
                            <div class="List-title">{{ company_name }}</div>
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                        <div class="collapsible-body"{{#active}} style="display: block;"{{/active}}>

                            <ul>
                                <li>
                                    <p><strong>Address:</strong> {{company_address}}{{^company_address}}<i>unknown</i>{{/company_address}}</p>
                                    <p><strong>Jurisdiction:</strong> {{company_jurisdiction}}{{^company_jurisdiction}}<i>unknown</i>{{/company_jurisdiction}}</p>
                                    <p><strong>Headquarters:</strong> {{company_hq}}{{^company_hq}}<i>unknown</i>{{/company_hq}}</p>
                                    <p><strong>Formed on:</strong> {{company_formed}}{{^company_formed}}<i>unknown</i>{{/company_formed}}</p>
                                    <p><strong>Website:</strong> <a href="{{company_website}}">{{company_website}}{{^company_website}}<i>unknown</i>{{/company_website}}</a></p>
                                </li>
                            </ul>
                            <p class="List-switch" data-to="companies" data-id="{{ company_id }}"><i class="material-icons">info</i></p>
                        </div>
                    {{/companyInfo}}
                </li>
            </script>


        </div>



        <div id="tab-2" class="col s12 tab-content">

            <div class="Search z-depth-1 hide-on-med-and-down ui-colors green">

                <div class="input-field Search-field">
                    <i class="material-icons small prefix Search-trigger">search</i>
                    <i class="material-icons small prefix Search-remove">close</i>
                    <input id="search-tab-3" type="text" class="Search-input" />
                    <label for="search-tab-3">Filter by Mineral</label>
                </div>

                <!--div class="Filters">
                    <ul class="Filters-list">
                        <li class="Filters-item">
                            <span class="chip Filters-itemFilter" data-filter="expiration">Foreign Owned</span>
                        </li>
                        <li class="Filters-item">
                            <span class="chip Filters-itemFilter">Namibian Owned</span>
                        </li>
                    </ul>
                </div-->

            </div>

            <div class="Data is-loading">

                <div class="Data-holder">

                    <div class="List List--main z-depth-1" data-level="0">
                        <div class="List-header ui-colors green">
                            <span class="hide-on-large-only List-back"><i class="material-icons">keyboard_arrow_left</i></span>
                            <span>Minerals <span class="List-count"></span></span>
                        </div>


                        <div class="Search Search--mobile hide-on-large-only brand green">

                            <!--div class="Filters Filters--mobile">
                                <i class="material-icons small Filters-trigger js-dropdown-trigger" data-beloworigin="true" data-activates='filters2'>filter_list</i>
                                <ul class="Filters-list z-depth-1" id="filters2">
                                    <li class="Filters-item">
                                        <span class="chip Filters-itemFilter" data-filter="expiration">Foreign Owned <i class="material-icons Filters-remove">close</i></span>
                                    </li>
                                    <li class="Filters-item">
                                        <span class="chip Filters-itemFilter" data-filter="ownership">Namibian Owned <i class="material-icons Filters-remove">close</i></span>
                                    </li>
                                </ul>
                            </div-->

                            <div class="Filters-active"></div>

                            <div class="input-field Search-field">
                                <i class="material-icons small prefix Search-trigger">search</i>
                                <i class="material-icons small prefix Search-remove">close</i>
                                <input id="search-tab-3" type="text" class="Search-input" />
                                <label for="search-tab-3">Filter by Mineral</label>
                            </div>

                        </div>

                        <div class="List-holder">
                            <ul class="collection">
                            </ul>
                        </div>

                    </div>

                    <div class="List List--extra z-depth-1 u-isHidden" data-level="1">
                        <div class="List-header ui-colors green">
                            <div class="List-headerActive">
                                <span class="hide-on-large-only List-back"><i class="material-icons">keyboard_arrow_left</i></span>
                                <span>Mines <span class="List-count"></span></span>
                            </div>
                        </div>

                        <div class="List-holder is-filterable">
                            <p class="List-headerInactive">
                                Select a mineral on the left to see mines
                            </p>
                            <ul class="collection collapsible" data-collapsible="accordion">
                            </ul>
                            <div class="Map Map--1 Map--inline minerals hide-on-large-only"></div>
                            <div class="Table row hide-on-large-only"></div>
                            <div class="OwnedLicenses row hide-on-large-only"></div>
                            <div class="Hierarchy row hide-on-large-only"></div>
                            <div class="Revenue row hide-on-large-only"></div>
                            <a class="waves-effect waves-light btn orange hide-on-large-only Download-button"><i class="material-icons right">file_download</i>Download data</a>
                        </div>
                    </div>

                </div>

                <div class="Map Map--1 minerals"></div>


                <div class="Loader">
                    <div class="Loader-holder">
                        <div class="preloader-wrapper big active"> <div class="spinner-layer spinner-blue-only"> <div class="circle-clipper left"> <div class="circle"></div> </div><div class="gap-patch"> <div class="circle"></div> </div><div class="circle-clipper right"> <div class="circle"></div> </div> </div> </div>
                    </div>
                </div>

            </div>


            <script type="x-tmpl-mustache" class="main-tpl">
                <li class="collection-item" data-id="{{ id }}" data-table="{{table}}" data-hierarchy="{{ hierarchy }}" data-ownedLicenses="{{ ownedLicenses }}">
                    <p class="List-title">{{ title }}</p>
                </li>
            </script>

           <script type="x-tmpl-mustache" class="extra-tpl">
                {{#minesInfo}}
                    <li{{#active}} class="active"{{/active}}>
                        <div class="collapsible-header{{#active}} active{{/active}}">
                            <div class="List-title">{{ mine_name }}</div>
                            <i class="material-icons">keyboard_arrow_down</i>
                        </div>
                        <div class="collapsible-body"{{#active}} style="display: block;"{{/active}}>

                            <ul>
                                <li>
                                    <p><strong>Mine region:</strong> {{mine_region}}{{^mine_region}}<i>unknown</i>{{/mine_region}}</p>
                                    <p><strong>Mine status:</strong> {{mine_status}}{{^mine_status}}<i>unknown</i>{{/mine_status}}</p>
                                </li>
                            </ul>
                            <p class="List-switch" data-to="mines" data-id="{{ mine_id }}"><i class="material-icons">info</i></p>
                        </div>
                    </li>
                {{/minesInfo}}
            </script>


        </div>



        <div class="AdditionalInfo u-isHidden">

            <div class="AdditionalInfo-header ui-colors green u-cf">

                <h2 class="AdditionalInfo-title">Transaction history for Licence number <span></span></h2>

                <a class="waves-effect waves-light btn orange AdditionalInfo-download"><i class="material-icons right">file_download</i>Download data</a>

            </div>

            <div class="row AdditionalInfo-data">

                <div class="col s12">
                    <div class="Table"></div>
                </div>

                <div class="col s12">
                    <div class="OwnedLicenses row"></div>
                </div>

                <div class="col s12">
                    <div class="Hierarchy row"></div>
                </div>

                <div class="col s12">
                    <div class="Revenue row"></div>
                </div>
            </div>

        </div>

    </div>

    <a class="Map-trigger btn-floating btn-large waves-effect waves-light red"><i class="material-icons">map</i></a>

    <script type="x-tmpl-mustache" class="licenceTable-tpl">
        <div class="col s12">
            <table class="bordered striped highlight responsive-table">
                <thead>
                    <tr>
                        <th data-field="licenceNumber">Licence Number</th>
                        <th data-field="transferDate">Transfer Date</th>
                        <th data-field="transferType">Transfer Type</th>
                        <th data-field="licenceSeller">Licence Seller</th>
                        <th data-field="sellerStakePrior">Seller Stake Prior</th>
                        <th data-field="licenceBuyer">Licence Buyer</th>
                        <th data-field="buyerStakeAfter">Buyer Stake After</th>
                        <th data-field="operatorPrior">Operator Prior</th>
                        <th data-field="operatorAfter">Operator After</th>
                    </tr>
                </thead>

                <tbody>
                    {{#tableRows}}
                        <tr>
                            <td>{{license_number}}{{^license_number}}<i>unknown</i>{{/license_number}}</td>
                            <td>{{transfer_date}}{{^transfer_date}}<i>unknown</i>{{/transfer_date}}</td>
                            <td>{{transfer_type}}{{^transfer_type}}<i>unknown</i>{{/transfer_type}}</td>
                            <td>{{seller}}{{^seller}}<i>unknown</i>{{/seller}}</td>
                            <td>{{seller_stake_prior}}{{^seller_stake_prior}}<i>unknown</i>{{/seller_stake_prior}}</td>
                            <td>{{buyer}}{{^buyer}}<i>unknown</i>{{/buyer}}</td>
                            <td>{{buyer_stake_after}}{{^buyer_stake_after}}<i>unknown</i>{{/buyer_stake_after}}</td>
                            <td>{{operator_prior}}{{^operator_prior}}<i>unknown</i>{{/operator_prior}}</td>
                            <td>{{operator_after}}{{^operator_after}}<i>unknown</i>{{/operator_after}}</td>
                        </tr>
                    {{/tableRows}}
                </tbody>
            </table>
        </div>
    </script>

    <script type="x-tmpl-mustache" class="companyTable-tpl">
        <div class="col s12">
            <p class="Table-title">Company information</p>
            <table class="bordered striped highlight responsive-table">
                <thead>
                    <tr>
                        <th data-field="name">Name</th>
                        <th data-field="jurisdiction">Jurisdiction</th>
                        <th data-field="registration">Registration</th>
                        <th data-field="headquarters">Headquarters</th>
                        <th data-field="dateOfFormation">Date Of Formation</th>
                        <th data-field="companyInfo">Company Info</th>
                    </tr>
                </thead>

                <tbody>
                    {{#tableRows}}
                        <tr>
                            <td>{{company_name}}{{^company_name}}<i>unknown</i>{{/company_name}}</td>
                            <td>{{company_jurisdiction}}{{^company_jurisdiction}}<i>unknown</i>{{/company_jurisdiction}}</td>
                            <td>{{company_registration}}{{^company_registration}}<i>unknown</i>{{/company_registration}}</td>
                            <td>{{company_hq}}{{^company_hq}}<i>unknown</i>{{/company_hq}}</td>
                            <td>{{company_formed}}{{^company_formed}}<i>unknown</i>{{/company_formed}}</td>
                            <td>{{company_address}}{{^company_address}}<i>unknown</i>{{/company_address}}</td>
                        </tr>
                    {{/tableRows}}
                </tbody>
            </table>
        </div>
    </script>

    <script type="x-tmpl-mustache" class="ownedLicenses-tpl">

        <div class="col s12"><p class="OwnedLicenses-title">Company owned licenses</p></div>
        {{#licence}}
            <div class="col s6 m4 l2">
                <div class="Block">
                    <p class="Block-title">{{name}} - {{percent}}</p>
                    {{#numbers}}<span>{{.}}</span>{{/numbers}}
                </div>
            </div>
        {{/licence}}

    </script>

    <script type="x-tmpl-mustache" class="hierarchy-tpl">
        <div class="col s12"><p class="Hierarchy-title">Company hierarchy</p></div>
        {{#hierarchy}}
            <div class="col s6 m4 l3 Hierarchy-data">
                <div class="Block">
                    <p class="Block-title">{{first_name}} {{last_name}}{{^first_name}}<i>unknown</i>{{/first_name}}</p>
                    <p>Nationality: {{nationality}}{{^nationality}}<i>unknown</i>{{/nationality}}</p>
                    <p>Start date: {{start_date}}{{^start_date}}<i>unknown</i>{{/start_date}}</p>
                    <p>Role: {{role}}{{^role}}<i>unknown</i>{{/role}}</p>
                </div>
            </div>
        {{/hierarchy}}

    </script>

    <script type="x-tmpl-mustache" class="revenue-tpl">
        <div class="col s12">
            <p class="Table-title">Company revenue</p>
            <table class="bordered striped highlight responsive-table">
                <thead>
                    <tr>
                        <th>Address</th>
                        <th>Amount milions</th>
                        <th>Currency</th>
                        <th>Date formed</th>
                        <th>Headquarters</th>
                        <th>Jurisdiction</th>
                        <th>Item</th>
                        <th>Name</th>
                        <th>Source</th>
                        <th>Website</th>
                        <th>Year</th>
                    </tr>
                </thead>

                <tbody>
                    {{#tableRows}}
                        <tr>
                            <td>{{address}}{{^address}}<i>unknown</i>{{/address}}</td>
                            <td>{{amount_millions}}{{^amount_millions}}<i>unknown</i>{{/amount_millions}}</td>
                            <td>{{currency}}{{^currency}}<i>unknown</i>{{/currency}}</td>
                            <td>{{date_formed}}{{^date_formed}}<i>unknown</i>{{/date_formed}}</td>
                            <td>{{hq}}{{^hq}}<i>unknown</i>{{/hq}}</td>
                            <td>{{jurisdiction}}{{^jurisdiction}}<i>unknown</i>{{/jurisdiction}}</td>
                            <td>{{item}}{{^item}}<i>unknown</i>{{/item}}</td>
                            <td>{{name}}{{^name}}<i>unknown</i>{{/name}}</td>
                            <td>{{source}}{{^source}}<i>unknown</i>{{/source}}</td>
                            <td style="word-wrap: break-word;">{{website}}{{^website}}<i>unknown</i>{{/website}}</td>
                            <td>{{year}}{{^year}}<i>unknown</i>{{/year}}</td>
                        </tr>
                    {{/tableRows}}
                </tbody>
            </table>
        </div>
    </script>
