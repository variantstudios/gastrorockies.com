
/**
 * @file
 * Javascript functions for getdirections module admin
 *
 * @author Bob Hutchinson http://drupal.org/user/52366
 * jquery stuff
*/
(function ($) {
  Drupal.behaviors.getdirections_admin = {
    attach: function() {
      // admin form
      if ($("#edit-getdirections-default-use-advanced,#edit-fields-field-directions-settings-edit-form-settings-default-use-advanced").attr('checked')) {
        $("#wrap-waypoints").show();
      }
      else {
        $("#wrap-waypoints").hide();
      }
      $("#edit-getdirections-default-use-advanced,#edit-fields-field-directions-settings-edit-form-settings-default-use-advanced").change(function() {
        if ($(this).attr('checked')) {
          $("#wrap-waypoints").show();
        }
        else {
          $("#wrap-waypoints").hide();
        }
      });

      if ($("#edit-getdirections-returnlink-node-enable").attr('checked')) {
        $("#wrap-node-link").show();
      }
      else {
        $("#wrap-node-link").hide();
      }
      $("#edit-getdirections-returnlink-node-enable").change(function() {
        if ($(this).attr('checked')) {
          $("#wrap-node-link").show();
        }
        else {
          $("#wrap-node-link").hide();
        }
      });

      if ($("#edit-getdirections-returnlink-user-enable").attr('checked')) {
        $("#wrap-user-link").show();
      }
      else {
        $("#wrap-user-link").hide();
      }
      $("#edit-getdirections-returnlink-user-enable").change(function() {
        if ($(this).attr('checked')) {
          $("#wrap-user-link").show();
        }
        else {
          $("#wrap-user-link").hide();
        }
      });

      if ($("#edit-getdirections-returnlink-term-enable").attr('checked')) {
        $("#wrap-term-link").show();
      }
      else {
        $("#wrap-term-link").hide();
      }
      $("#edit-getdirections-returnlink-term-enable").change(function() {
        if ($(this).attr('checked')) {
          $("#wrap-term-link").show();
        }
        else {
          $("#wrap-term-link").hide();
        }
      });

      if ($("#edit-getdirections-returnlink-comment-enable").attr('checked')) {
        $("#wrap-comment-link").show();
      }
      else {
        $("#wrap-comment-link").hide();
      }
      $("#edit-getdirections-returnlink-comment-enable").change(function() {
        if ($(this).attr('checked')) {
          $("#wrap-comment-link").show();
        }
        else {
          $("#wrap-comment-link").hide();
        }
      });

      if ($("#edit-getdirections-colorbox-enable").attr('checked')) {
        $("#wrap-getdirections-colorbox").show();
      }
      else {
        $("#wrap-getdirections-colorbox").hide();
      }
      $("#edit-getdirections-colorbox-enable").change(function() {
        if ($(this).attr('checked')) {
          $("#wrap-getdirections-colorbox").show();
        }
        else {
          $("#wrap-getdirections-colorbox").hide();
        }
      });

      if ($("#edit-getdirections-default-travelmode-show,#edit-fields-field-directions-settings-edit-form-settings-default-travelmode-show").attr('checked')) {
        $("#getdirections_transit_dates_wrapper").show();
      }
      else {
        $("#getdirections_transit_dates_wrapper").hide();
      }
      $("#edit-getdirections-default-travelmode-show,#edit-fields-field-directions-settings-edit-form-settings-default-travelmode-show").change(function() {
        if ($(this).attr('checked')) {
          $("#getdirections_transit_dates_wrapper").show();
        }
        else {
          $("#getdirections_transit_dates_wrapper").hide();
        }
      });

      if ($("#edit-getdirections-misc-trafficinfo,#edit-fields-field-directions-settings-edit-form-settings-misc-trafficinfo").is('input')) {
        if ($("#edit-getdirections-misc-trafficinfo,#edit-fields-field-directions-settings-edit-form-settings-misc-trafficinfo").attr('checked')) {
          $("#wrap-getdirections-trafficinfo").show();
        }
        else {
          $("#wrap-getdirections-trafficinfo").hide();
        }
        $("#edit-getdirections-misc-trafficinfo,#edit-fields-field-directions-settings-edit-form-settings-misc-trafficinfo").change(function() {
          if ($(this).attr('checked')) {
            $("#wrap-getdirections-trafficinfo").show();
          }
          else {
            $("#wrap-getdirections-trafficinfo").hide();
          }
        });
      }

      if ($("#edit-getdirections-misc-bicycleinfo,#edit-fields-field-directions-settings-edit-form-settings-misc-bicycleinfo").is('input')) {
        if ($("#edit-getdirections-misc-bicycleinfo,#edit-fields-field-directions-settings-edit-form-settings-misc-bicycleinfo").attr('checked')) {
          $("#wrap-getdirections-bicycleinfo").show();
        }
        else {
          $("#wrap-getdirections-bicycleinfo").hide();
        }
        $("#edit-getdirections-misc-bicycleinfo,#edit-fields-field-directions-settings-edit-form-settings-misc-bicycleinfo").change(function() {
          if ($(this).attr('checked')) {
            $("#wrap-getdirections-bicycleinfo").show();
          }
          else {
            $("#wrap-getdirections-bicycleinfo").hide();
          }
        });
      }

      if ($("#edit-getdirections-misc-transitinfo,#edit-fields-field-directions-settings-edit-form-settings-misc-transitinfo").is('input')) {
        if ($("#edit-getdirections-misc-transitinfo,#edit-fields-field-directions-settings-edit-form-settings-misc-transitinfo").attr('checked')) {
          $("#wrap-getdirections-transitinfo").show();
        }
        else {
          $("#wrap-getdirections-transitinfo").hide();
        }
        $("#edit-getdirections-misc-transitinfo,#edit-fields-field-directions-settings-edit-form-settings-misc-transitinfo").change(function() {
          if ($(this).attr('checked')) {
            $("#wrap-getdirections-transitinfo").show();
          }
          else {
            $("#wrap-getdirections-transitinfo").hide();
          }
        });
      }

      if ($("#edit-getdirections-misc-panoramio-use").is('input')) {
        if ($("#edit-getdirections-misc-panoramio-use").attr('checked')) {
          $("#wrap-getdirections-panoramio-use").show();
        }
        else {
          $("#wrap-getdirections-panoramio-use").hide();
        }
        $("#edit-getdirections-misc-panoramio-use").change(function() {
          if ($(this).attr('checked')) {
            $("#wrap-getdirections-panoramio-use").show();
          }
          else {
            $("#wrap-getdirections-panoramio-use").hide();
          }
        });
      }

      if ($("#edit-getdirections-misc-panoramio-show,#edit-fields-field-directions-settings-edit-form-settings-misc-panoramio-show").is('input')) {
        if ($("#edit-getdirections-misc-panoramio-show,#edit-fields-field-directions-settings-edit-form-settings-misc-panoramio-show").attr('checked')) {
          $("#wrap-getdirections-panoramio").show();
        }
        else {
          $("#wrap-getdirections-panoramio").hide();
        }
        $("#edit-getdirections-misc-panoramio-show,#edit-fields-field-directions-settings-edit-form-settings-misc-panoramio-show").change(function() {
          if ($(this).attr('checked')) {
            $("#wrap-getdirections-panoramio").show();
          }
          else {
            $("#wrap-getdirections-panoramio").hide();
          }
        });
      }

      if ( $("#edit-getdirections-misc-weather-use").is('input')) {
        if ($("#edit-getdirections-misc-weather-use").attr('checked')) {
          $("#wrap-getdirections-weather-use").show();
        }
        else {
          $("#wrap-getdirections-weather-use").hide();
        }
        $("#edit-getdirections-misc-weather-use").change(function() {
          if ($(this).attr('checked')) {
            $("#wrap-getdirections-weather-use").show();
          }
          else {
            $("#wrap-getdirections-weather-use").hide();
          }
        });
      }

      if ($("#edit-getdirections-misc-weather-show,#edit-fields-field-directions-settings-edit-form-settings-misc-weather-show").is('input')) {
        if ($("#edit-getdirections-misc-weather-show,#edit-fields-field-directions-settings-edit-form-settings-misc-weather-show").attr('checked')) {
          $("#wrap-getdirections-weather").show();
        }
        else {
          $("#wrap-getdirections-weather").hide();
        }
        $("#edit-getdirections-misc-weather-show,#edit-fields-field-directions-settings-edit-form-settings-misc-weather-show").change(function() {
          if ($(this).attr('checked')) {
            $("#wrap-getdirections-weather").show();
          }
          else {
            $("#wrap-getdirections-weather").hide();
          }
        });
        if ($("#edit-getdirections-misc-weather-cloud,#edit-fields-field-directions-settings-edit-form-settings-misc-weather-cloud").attr('checked')) {
          $("#wrap-getdirections-weather-cloud").show();
        }
        else {
          $("#wrap-getdirections-weather-cloud").hide();
        }
        $("#edit-getdirections-misc-weather-cloud,#edit-fields-field-directions-settings-edit-form-settings-misc-weather-cloud").change(function() {
          if ($(this).attr('checked')) {
            $("#wrap-getdirections-weather-cloud").show();
          }
          else {
            $("#wrap-getdirections-weather-cloud").hide();
          }
        });
      }

      if ($("#edit-getdirections-misc-geolocation-enable,#edit-fields-field-directions-settings-edit-form-settings-misc-geolocation-enable").is('input')) {
        if ($("#edit-getdirections-misc-geolocation-enable,#edit-fields-field-directions-settings-edit-form-settings-misc-geolocation-enable").attr('checked')) {
          $("#wrap-getdirections-geolocation-options").show();
        }
        else {
          $("#wrap-getdirections-geolocation-options").hide();
        }
        $("#edit-getdirections-misc-geolocation-enable,#edit-fields-field-directions-settings-edit-form-settings-misc-geolocation-enable").change(function() {
          if ($(this).attr('checked')) {
            $("#wrap-getdirections-geolocation-options").show();
          }
          else {
            $("#wrap-getdirections-geolocation-options").hide();
          }
        });
      }

    }
  }
})(jQuery);
