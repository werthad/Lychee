import L from "leaflet";
import "leaflet-rotatedmarker/leaflet.rotatedMarker.js";
import "leaflet.markercluster/dist/leaflet.markercluster.js";
import "@lychee-org/leaflet.photo/Leaflet.Photo.js";
import "leaflet/dist/leaflet.css";
import "@lychee-org/leaflet.photo/Leaflet.Photo.css";

export default class SidebarMap {
	layer: string;
	attribution: string;
	url_asset: string;

	constructor() {
		this.layer = "";
		this.attribution = "";
		this.url_asset = "";
	}

	displayOnMap(latitude: number, longitude: number) {
		const mapData = document.getElementById("leaflet_map_single_photo");
		this.layer = mapData?.dataset.layer ?? "";
		this.url_asset = mapData?.dataset.asset ?? "";
		this.attribution = mapData?.dataset.provider ?? "";

		// Leaflet searches for icon in same directory as js file -> paths needs
		// to be overwritten
		// @ts-expect-error
		delete L.Icon.Default.prototype._getIconUrl;
		L.Icon.Default.mergeOptions({
			iconRetinaUrl: this.url_asset + "img/marker-icon-2x.png",
			iconUrl: this.url_asset + "img/marker-icon.png",
			shadowUrl: this.url_asset + "img/marker-shadow.png",
		});

		// kill the map if it exists
		const container = L.DomUtil.get("leaflet_map_single_photo");
		if (container !== null) {
			// @ts-expect-error
			container._leaflet_id = null;
		}

		const myMap = L.map("leaflet_map_single_photo").setView([latitude, longitude], 13);

		L.tileLayer(this.layer, { attribution: this.attribution }).addTo(myMap);

		// Add Marker to map, direction is not set
		L.marker([latitude, longitude]).addTo(myMap);
	}
}
