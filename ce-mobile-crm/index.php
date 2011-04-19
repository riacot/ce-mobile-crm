<?php
	session_start();

	$SrVSugarSessionId = "";
	$user_name="";
	if (isset($_GET["user_name"]))
		$user_name=$_GET["user_name"];

	if (isset($_SESSION["is_valid_session"]))
	{
		if ($_SESSION["is_valid_session"])
			$SrVSugarSessionId=session_id();
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<link rel="apple-touch-startup-image" href="images/startup.png" />
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="jquery_mobile/jquery.mobile-1.0a3.min.css" />
		<script>
			var SrVSugarSessionId = '<?php echo $SrVSugarSessionId ?>';
			var SugarLanguage = '<?php echo $_SESSION["user_language"] ?>';
		</script>
		<script type="text/javascript" src="js/jquery-1.5.min.js">
		</script>
		<script type="text/javascript" src="jquery_mobile/jquery.mobile-1.0a3.min.js"></script>
		<script type="text/javascript" src="js/Md5.js"></script>
		<script type="text/javascript" src="js/config.js"></script>
		<script type="text/javascript" src="js/select_field.js"></script>
		<script type="text/javascript" src="js/ce-mobile-crm-0.0.2.2.js"></script>
	</head>
	<body>
		<div id="HomePage" data-role="page" data-theme="b">
			<div data-role="header" data-nobackbtn="true" >
				<h1 id="SiteName"></h1>
				<a href="javascript:LogOutUser();" class="ui-btn-right">Log Out</a>
			</div>
			<!-- /header -->
			<div data-role="content">
				<div class="IconWrapper" id="HomePageIcon">
				</div>
			</div>
			<!-- /content -->
		</div>
		<!-- /page -->

		<div id="AccountsListPage" data-role="page" data-theme="b">
			<div data-role="header">
				<h1 id="Accountstitle"></h1>
			</div>
			<!-- /header -->
			<div id="AccountListPageSubMenu" data-role="navbar">
				<ul>
					<li>
						<a href="javascript:SugarCrmGetAccountsListFromServer(AccountsListPrevOffset);"
						data-icon="arrow-l"></a>
					</li>
					<li>
						<a href="javascript:SugarCrmGetAccountsListFromServer(AccountsListNextOffset);"
						data-icon="arrow-r"></a>
					</li>
				</ul>
			</div>
			<div data-role="content">
				<ul id="AllAccountsListDiv" data-role="listview" data-filter="false" />
			</div>
			<!-- /content -->
		</div>
		<!-- /page -->
		<div id="ContactsListPage" data-role="page" data-theme="b">
			<div data-role="header">
				<h1>
					Contacts
				</h1>
			</div>
			<!-- /header -->
			<div id="AccountListPageSubMenu" data-role="navbar">
				<ul>
					<li>
						<a href="javascript:SugarCrmGetContactListFromServer(ContactsListPrevOffset);" data-icon="arrow-l"></a>
					</li>
					<li>
						<a href="javascript:SugarCrmGetContactListFromServer(ContactsListNextOffset);" data-icon="arrow-r"></a>
					</li>
				</ul>
			</div>
			<div data-role="content">
				<ul id="AllContactsListDiv" data-role="listview" data-filter="false" />
			</div>
			<!-- /content -->
		</div>
		<!-- /page -->
		<div id="OpportunitiesListPage" data-role="page" data-theme="b">
			<div data-role="header">
				<h1>
					Opportunities
				</h1>
			</div>
			<!-- /header -->
			<div id="OpportunitiesListPageSubMenu" data-role="navbar">
				<ul>
					<li>
						<a href="javascript:SugarCrmGetOpportunitiesListFromServer(OpportunitiesListPrevOffset);"
						data-icon="arrow-l"></a>
					</li>
					<li>
						<a href="javascript:SugarCrmGetOpportunitiesListFromServer(OpportunitiesListNextOffset);"
						data-icon="arrow-r"></a>
					</li>
				</ul>
			</div>
			<div data-role="content">
				<ul id="AllOpportunitiesListDiv" data-role="listview" data-filter="false" />
			</div>
			<!-- /content -->
		</div>
		<!-- /page -->
		<div id="LeadsListPage" data-role="page" data-theme="b">
			<div data-role="header">
				<h1>
					Leads
				</h1>
			</div>
			<!-- /header -->
			<div id="LeadsListPageSubMenu" data-role="navbar">
				<ul>
					<li>
						<a href="javascript:SugarCrmGetLeadsListFromServer(LeadsListPrevOffset);" data-icon="arrow-l"></a>
					</li>
					<li>
						<a href="javascript:SugarCrmGetLeadsListFromServer(LeadsListNextOffset);" data-icon="arrow-r"></a>
					</li>
				</ul>
			</div>
			<div data-role="content">
				<ul id="AllLeadsListDiv" data-role="listview" data-filter="false" />
			</div>
			<!-- /content -->
		</div>
		<!-- /page -->
		<div id="CallsListPage" data-role="page" data-theme="b">
			<div data-role="header">
				<h1>
					Calls
				</h1>
			</div>
			<!-- /header -->
			<div id="CallsListPageSubMenu" data-role="navbar">
				<ul>
					<li>
						<a href="javascript:SugarCrmGetCallsListFromServer(CallsListPrevOffset);" data-icon="arrow-l"></a>
					</li>
					<li>
						<a href="javascript:SugarCrmGetCallsListFromServer(CallsListNextOffset);" data-icon="arrow-r"></a>
					</li>
				</ul>
			</div>
			<div data-role="content">
				<ul id="AllCallsListDiv" data-role="listview" data-filter="false" />
			</div>
			<!-- /content -->
		</div>
		<!-- /page -->
		<div id="MeetingsListPage" data-role="page" data-theme="b">
			<div data-role="header">
				<h1>
					Meetings
				</h1>
			</div>
			<!-- /header -->
			<div id="MeetingsListPageSubMenu" data-role="navbar">
				<ul>
					<li>
						<a href="javascript:SugarCrmGetMeetingsListFromServer(MeetingsListPrevOffset);"
						data-icon="arrow-l"></a>
					</li>
					<li>
						<a href="javascript:SugarCrmGetMeetingsListFromServer(MeetingsListNextOffset);"
						data-icon="arrow-r"></a>
					</li>
				</ul>
			</div>
			<div data-role="content">
				<ul id="AllMeetingsListDiv" data-role="listview" data-filter="false" />
			</div>
			<!-- /content -->
		</div>
		<!-- /page -->
		<div id="TasksListPage" data-role="page" data-theme="b">
			<div data-role="header">
				<h1>
					Tasks
				</h1>
			</div>
			<!-- /header -->
			<div id="TasksListPageSubMenu" data-role="navbar">
				<ul>
					<li>
						<a href="javascript:SugarCrmGetTasksListFromServer(TasksListPrevOffset);" data-icon="arrow-l"></a>
					</li>
					<li>
						<a href="javascript:SugarCrmGetTasksListFromServer(TasksListNextOffset);" data-icon="arrow-r"></a>
					</li>
				</ul>
			</div>
			<div data-role="content">
				<ul id="AllTasksListDiv" data-role="listview" data-filter="false" />
			</div>
			<!-- /content -->
		</div>
		<!-- /page -->
		<div data-role="page" id="ViewAccountDetailsPage" data-theme="b">
			<div data-role="header">
				<h1 id="AccountDetailstitle"></h1>
				<a href="#HomePage" data-icon="home" data-direction="reverse" class="ui-btn-right homeicon"></a>
			</div>
			<div data-role="content">
				<h3 id="AccountNameH1">
				</h3>
				<p id="AccountDescriptionP">
				</p>
				<div>
					<ul id="ViewAccountDetailsPageDetailsList" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewAccountDetailsPageContactsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewAccountDetailsPageOpportunitiesListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewAccountDetailsPageLeadsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewAccountDetailsPageCallsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewAccountDetailsPageMeetingsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewAccountDetailsPageTasksListUl" data-role="listview" data-inset="true"
					/>
				</div>
			</div>
		</div>
		<div data-role="page" id="ViewContactDetailsPage" data-theme="b">
			<div data-role="header">
				<h1>
					Contact Details
				</h1>
				<a href="#HomePage" data-icon="home" data-direction="reverse" class="ui-btn-right homeicon"></a>
			</div>
			<div data-role="content">
				<h3 id="ContactNameH1">
				</h3>
				<p id="ContactTitleP">
				</p>
				<div>
					<ul id="ViewContactDetailsPageDetailsList" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewContactDetailsPageOpportunitiesListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewContactDetailsPageLeadsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewContactDetailsPageCallsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewContactDetailsPageMeetingsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewContactDetailsPageTasksListUl" data-role="listview" data-inset="true"
					/>
				</div>
			</div>
		</div>
		<div data-role="page" id="ViewOpportunityDetailsPage" data-theme="b">
			<div data-role="header">
				<h1>
					Opportunity Details
				</h1>
				<a href="#HomePage" data-icon="home" data-direction="reverse" class="ui-btn-right homeicon"></a>
			</div>
			<div data-role="content">
				<h3 id="OpportunityNameH1">
				</h3>
				<p id="OpportunityDescriptionP">
				</p>
				<div>
					<ul id="ViewOpportunityDetailsPageDetailsList" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewOpportunityDetailsPageContactsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewOpportunityDetailsPageLeadsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewOpportunityDetailsPageCallsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewOpportunityDetailsPageMeetingsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewOpportunityDetailsPageTasksListUl" data-role="listview" data-inset="true"
					/>
				</div>
			</div>
		</div>
		<div data-role="page" id="ViewLeadDetailsPage" data-theme="b">
			<div data-role="header">
				<h1>
					Lead Details
				</h1>
				<a href="#HomePage" data-icon="home" data-direction="reverse" class="ui-btn-right homeicon"></a>
			</div>
			<div data-role="content">
				<h3 id="LeadNameH1">
				</h3>
				<p id="LeadTitleP">
				</p>
				<div>
					<ul id="ViewLeadDetailsPageDetailsList" data-role="listview" data-inset="true" />
				</div>
				<div>
					<ul id="ViewLeadDetailsPageCallsListUl" data-role="listview" data-inset="true" />
				</div>
				<div>
					<ul id="ViewLeadDetailsPageMeetingsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewLeadDetailsPageTasksListUl" data-role="listview" data-inset="true" />
				</div>
			</div>
		</div>
		<div data-role="page" id="ViewCallDetailsPage" data-theme="b">
			<div data-role="header">
				<h1>
					Call Details
				</h1>
				<a href="#HomePage" data-icon="home" data-direction="reverse" class="ui-btn-right homeicon"></a>
			</div>
			<div data-role="content">
				<h3 id="CallNameH1">
				</h3>
				<p id="CallSubjectP">
				</p>
				<div>
					<ul id="ViewCallDetailsPageDetailsList" data-role="listview" data-inset="true" />
				</div>
				<div>
					<ul id="ViewCallDetailsPageContactsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewCallDetailsPageUsersListUl" data-role="listview" data-inset="true" />
				</div>
				<div>
					<ul id="ViewCallDetailsPageLeadsListUl" data-role="listview" data-inset="true" />
				</div>
			</div>
		</div>
		<div data-role="page" id="ViewMeetingDetailsPage" data-theme="b">
			<div data-role="header">
				<h1>
					Meeting Details
				</h1>
				<a href="#HomePage" data-icon="home" data-direction="reverse" class="ui-btn-right homeicon"></a>
			</div>
			<div data-role="content">
				<h3 id="MeetingNameH1">
				</h3>
				<p id="MeetingSubjectP">
				</p>
				<div>
					<ul id="ViewMeetingDetailsPageDetailsList" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewMeetingDetailsPageContactsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewMeetingDetailsPageUsersListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewMeetingDetailsPageLeadsListUl" data-role="listview" data-inset="true"
					/>
				</div>
			</div>
		</div>
		<div data-role="page" id="ViewTaskDetailsPage" data-theme="b">
			<div data-role="header">
				<h1>
					Task Details
				</h1>
				<a href="#HomePage" data-icon="home" data-direction="reverse" class="ui-btn-right homeicon"></a>
			</div>
			<div data-role="content">
				<h3 id="TaskNameH1">
				</h3>
				<p id="TaskSubjectP">
				</p>
				<div>
					<ul id="ViewTaskDetailsPageDetailsList" data-role="listview" data-inset="true" />
				</div>
				<div>
					<ul id="ViewTaskDetailsPageContactsListUl" data-role="listview" data-inset="true"
					/>
				</div>
				<div>
					<ul id="ViewTaskDetailsPageUsersListUl" data-role="listview" data-inset="true" />
				</div>
				<div>
					<ul id="ViewTaskDetailsPageLeadsListUl" data-role="listview" data-inset="true" />
				</div>
			</div>
		</div>
		<div id="LoginPage" data-role="page" data-theme="b">
			<div data-role="header" data-nobackbtn="true">
				<h1>
					Login
				</h1>
			</div>
			<!-- /header -->
			<div data-role="content">
				<p>
					Enter your username and password, then click login
				</p>
				</center>
				<label for="SettingsPageSugarCrmUsername">
					* Username:
				</label>
				<input value="<?php echo $user_name ?>" id="SettingsPageSugarCrmUsername" type="text" />
				<br />
				<label for="SettingsPageSugarCrmPassword">
					* Password
				</label>
				<input id="SettingsPageSugarCrmPassword" type="password" />
				<br />
				<br />
				<a href="javascript:LoginUser();" data-role="button" data-theme="c">Login</a>
				<br />
				<center>
					<span id="FooterLogin" ></span>
				</center>
			</div>
		</div>
		<!-- /page -->
	</body>

</html>