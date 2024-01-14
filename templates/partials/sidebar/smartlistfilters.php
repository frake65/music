<div id="smartlist-filters" class="sidebar-content" ng-controller="SmartListFiltersController" ng-if="contentType=='smartlist' && smartListParams">

	<h1 translate>Smart playlist filters</h1>

	<div>
		<label for="filter-size" translate>List size</label>
		<input id="filter-size" type="number" ng-model="smartListParams.size"/>
	</div>

	<div>
		<label for="filter-from-year" translate>From year</label>
		<input id="filter-from-year" type="number" ng-model="smartListParams.fromYear"/>
	</div>

	<div>
		<label for="filter-to-year" translate>To year</label>
		<input id="filter-to-year" type="number" ng-model="smartListParams.toYear"/>
	</div>

	<div>
		<label for="filter-genres" translate>Genres</label>
		<select id="filter-genres" multiple data-placeholder=" " ng-model="genres">
			<option ng-repeat="genre in allGenres" value="{{ genre.id }}">{{ genre.name }}</option>
		</select>
	</div>

	<div>
		<label for="filter-artists" translate>Artists</label>
		<select id="filter-artists" multiple data-placeholder=" " ng-model="artists">
			<option ng-repeat="artist in allArtists" value="{{ artist.id }}">{{ artist.name }}</option>
		</select>
	</div>

	<div title="{{ 'Note that this selection makes any difference only when the library has more than requested number of matches' | translate }}">
		<label for="filter-history" translate>History</label>
		<select id="filter-history" ng-model="smartListParams.history">
			<option value=""></option>
			<option value="recently-played" translate>Recently played</option>
			<option value="not-recently-played" translate>Not recently played</option>
			<option value="often-played" translate>Often played</option>
			<option value="rarely-played" translate>Rarely played</option>
			<option value="recently-added" translate>Recently added</option>
			<option value="not-recently-added" translate>Not recently added</option>
		</select>
	</div>

	<div><button id="update-button" ng-click="onUpdateButton()" ng-disabled="!fieldsValid" translate>Update</button></div>
</div>
