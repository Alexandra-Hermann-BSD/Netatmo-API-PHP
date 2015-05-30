<?php
namespace net\netatmo {
	/**
	 * RestErrorCode constants.
	 * @copy OpenSource
	 * Netatmo-API-PHP FORK
	 *
	 * @version 1.0
	 *
	 */
	class RestErrorCode
	{
	    const ACCESS_TOKEN_MISSING = 1;
	    const INVALID_ACCESS_TOKEN = 2;
	    const ACCESS_TOKEN_EXPIRED = 3;
	    const INCONSISTENCY_ERROR = 4;
	    const APPLICATION_DEACTIVATED = 5;
	    const INVALID_EMAIL = 6;
	    const NOTHING_TO_MODIFY = 7;
	    const EMAIL_ALREADY_EXISTS = 8;
	    const DEVICE_NOT_FOUND = 9;
	    const MISSING_ARGS = 10;
	    const INTERNAL_ERROR = 11;
	    const DEVICE_OR_SECRET_NO_MATCH = 12;
	    const OPERATION_FORBIDDEN = 13;
	    const APPLICATION_NAME_ALREADY_EXISTS = 14;
	    const NO_PLACES_IN_DEVICE = 15;
	    const MGT_KEY_MISSING = 16;
	    const BAD_MGT_KEY = 17; 
	    const DEVICE_ID_ALREADY_EXISTS = 18;
	    const IP_NOT_FOUND = 19;
	    const TOO_MANY_USER_WITH_IP = 20;
	    const INVALID_ARG = 21;
	    const APPLICATION_NOT_FOUND = 22;
	    const USER_NOT_FOUND = 23;
	    const INVALID_TIMEZONE = 24;
	    const INVALID_DATE = 25;
	    const MAX_USAGE_REACHED = 26;
	    const MEASURE_ALREADY_EXISTS = 27;
	    const ALREADY_DEVICE_OWNER = 28;
	    const INVALID_IP = 29;
	    const INVALID_REFRESH_TOKEN = 30;
	    const NOT_FOUND = 31;
	    const BAD_PASSWORD = 32;
	    const FORCE_ASSOCIATE = 33;
	}
	
	/**
	 * Scopes constants.
	 * @copy OpenSource
	 * Netatmo-API-PHP FORK
	 *
	 * @version 1.1
	 * 
	 */
	class Scopes
	{
		/**
		 * Read from station.
		 * @var string
		 */
	    const SCOPE_READ_STATION = "read_station";
		/**
		 * Write to station.
		 * @var string
		 */
	    const SCOPE_WRITE_STATION = "write_station";
	    /**
	     * Read from thermostat.
	     * @var string
	     */
	    const SCOPE_READ_THERM = "read_thermostat";
	    /**
	     * Write to thermostat.
	     * @var string
	     */
	    const SCOPE_WRITE_THERM = "write_thermostat";
	    /**
	     * Array of valid scopes.
	     * @var array of strings
	     */
	    static $validScopes = array(Scopes::SCOPE_READ_STATION,Scopes::SCOPE_WRITE_STATION,Scopes::SCOPE_READ_THERM,Scopes::SCOPE_WRITE_THERM);
	}
	
	/**
	 * ClientErrorCode constants for OAuth errors.
	 * @copy OpenSource
	 * Netatmo-API-PHP FORK
	 *
	 * @version 1.0
	 *
	 */
	class ClientErrorCode
	{
		/**
		 * OAuth: invalid grant.
		 * @var int
		 */
	   const OAUTH_INVALID_GRANT = -1;
	   /**
		 * OAuth: other error.
		 * @var int
		 */
	    const OAUTH_OTHER = -2;
	}
	
	/**
	 * PublicConst constants.
	 * @copy OpenSource
	 * Netatmo-API-PHP FORK
	 *
	 * @version 1.0
	 *
	 */
	class PublicConst
	{
		/**
		 * Metric unit.
		 * @var int
		 */
	   const UNIT_METRIC = 0;
	   /**
		 * US unit.
		 * @var int
		 */
	   const UNIT_US = 1;
	   /**
		 * Type-Number unit.
		 * @var int
		 */
	   const UNIT_TYPE_NUMBER = 2;
	
	   /**
		 * Wind speed unit in km/h.
		 * @var int
		 */
	   const UNIT_WIND_KMH = 0;
	   /**
		 * Wind speed unit in miles/h.
		 * @var int
		 */
	   const UNIT_WIND_MPH = 1;
	   /**
		 * Wind speed unit in m/s.
		 * @var int
		 */
	   const UNIT_WIND_MS = 2;
	   /**
		 * Wind speed unit in beaufort.
		 * @var int
		 */
	   const UNIT_WIND_BEAUFORT = 3;
	   /**
		 * Wind speed unit in knots.
		 * @var int
		 */
	   const UNIT_WIND_KNOT = 4;    
	   /**
		 * Wind speed-number unit.
		 * @var int
		 */
	   const UNIT_WIND_NUMBER = 5;
	
	   /**
	    * Feels like algorithm: humidity.
	    * @var int
	    */
	   const FEEL_LIKE_HUMIDEX_ALGO = 0;
	   /**
	    * Feels like algorithm: heat.
	    * @var int
	    */
	   const FEEL_LIKE_HEAT_ALGO = 1;
	   /**
	    * Feels like number.
	    * @var int
	    */
	   const FEEL_LIKE_NUMBER = 2;
	
	   /**
	    * Kind of timeline: read.
	    * @var int
	    */
	   const KIND_READ_TIMELINE = 0;
	   /**
	    * Kind of timeline: do not read.
	    * @var int
	    */
	   const KIND_NOT_READ_TIMELINE = 1;
	   /**
	    * Kind of timeline: both.
	    * @var int
	    */
	   const KIND_BOTH_TIMELINE = 2;
	}
	
	/**
	 * WifiRssiThreshold constants.
	 * @copy OpenSource
	 * Netatmo-API-PHP FORK
	 *
	 * @version 1.0
	 *
	 */
	class WifiRssiThreshold
	{
	   /**
		 * WiFi threshold level 0 = bad signal.
		 * @var int
		 */
	   const RSSI_THRESHOLD_0 = 86;/*bad signal*/
	   /**
		 * WiFi threshold level 1 = middle quality signal.
		 * @var int
		 */
	   const RSSI_THRESHOLD_1 = 71;/*middle quality signal*/
	   /**
		 * WiFi threshold level 2 = good signal.
		 * @var int
		 */
	   const RSSI_THRESHOLD_2 = 56;/*good signal*/
	}
	
	/**
	 * RadioRssiTreshold constants.
	 * @copy OpenSource
	 * Netatmo-API-PHP FORK
	 *
	 * @version 1.0
	 *
	 */
	class RadioRssiTreshold
	{
		/**
		 * Radio threshold level 0.
		 * @var int
		 */
	   const RADIO_THRESHOLD_0 = 90;
	   /**
		 * Radio threshold level 1.
		 * @var int
		 */
	   const RADIO_THRESHOLD_1 = 80;
	   /**
		 * Radio threshold level 2.
		 * @var int
		 */
	   const RADIO_THRESHOLD_2 = 70;
	   /**
		 * Radio threshold level 3.
		 * @var int
		 */
	   const RADIO_THRESHOLD_3 = 60;
	}
	
	/**
	 * ScheduleTime constants.
	 * @copy OpenSource
	 * Netatmo-API-PHP FORK
	 *
	 * @version 1.0
	 *
	 */
	class ScheduleTime
	{
		/**
		 * Default week wakeup-time.
		 * @var int
		 */
	   const WEEK_WAKEUP_TIME_DEFAULT = 420;
	   /**
		 * Default week sleep-time.
		 * @var int
		 */
	   const WEEK_SLEEP_TIME_DEFAULT = 1320;
	   /**
		 * Default week work-time.
		 * @var int
		 */
	   const WEEK_WORK_TIME_DEFAULT = 480;
	   /**
		 * Default week work-time back.
		 * @var int
		 */
	   const WEEK_WORK_TIME_BACK_DEFAULT = 1140;
	   /**
		 * Default week work lunch-time.
		 * @var int
		 */
	   const WEEK_WORK_LUNCH_TIME_DEFAULT = 720;
	   /**
		 * Default week work lunch-time back.
		 * @var int
		 */
	   const WEEK_WORK_LUNCH_TIME_BACK_DEFAULT = 810;
	}
	
	/**
	 * BatteryLevelIndoorModule constants.
	 * @copy OpenSource
	 * Netatmo-API-PHP FORK
	 *
	 * @version 1.0
	 *
	 */
	class BatteryLevelIndoorModule
	{
	   /* Battery range: 6000 ... 4200 */
	   /**
		 * Level 0 = FULL
		 * @var int
		 */
	   const INDOOR_BATTERY_LEVEL_0 = 5640;/*full*/
	   /**
	    * Level 1 = HIGH
	    * @var int
	    */
	   const INDOOR_BATTERY_LEVEL_1 = 5280;/*high*/
	   /**
	    * Level 2 = MEDIUM
	    * @var int
	    */
	   const INDOOR_BATTERY_LEVEL_2 = 4920;/*medium*/
	   /**
	    * Level 3 = LOW
	    * @var int
	    */
	   const INDOOR_BATTERY_LEVEL_3 = 4560;/*low*/
	   /* Below 4560: very low */
	}
	
	/**
	 * BatteryLevelModule constants.
	 * @copy OpenSource
	 * Netatmo-API-PHP FORK
	 *
	 * @version 1.0
	 *
	 */
	class BatteryLevelModule
	{
	   /* Battery range: 6000 ... 3600 */
		/**
		 * Level 0 = FULL
		 * @var int
		 */
	   const BATTERY_LEVEL_0 = 5500;/*full*/
	   /**
	    * Level 1 = HIGH
	    * @var int
	    */
	   const BATTERY_LEVEL_1 = 5000;/*high*/
	   /**
	    * Level 2 = MEDIUM
	    * @var int
	    */
	   const BATTERY_LEVEL_2 = 4500;/*medium*/
	   /**
	    * Level 3 = LOW
	    * @var int
	    */
	   const BATTERY_LEVEL_3 = 4000;/*low*/
	   /* below 4000: very low */
	}
	
	/**
	 * BatteryLevelThermostat constants.
	 * @copy OpenSource
	 * Netatmo-API-PHP FORK
	 *
	 * @version 1.0
	 *
	 */
	class BatteryLevelThermostat
	{
	   /* Battery range: 4500 ... 3000 */
		/**
		 * Level 0 = FULL
		 * @var int
		 */
	   const THERMOSTAT_BATTERY_LEVEL_0 = 4100;/*full*/
	   /**
	    * Level 1 = HIGH
	    * @var int
	    */
	   const THERMOSTAT_BATTERY_LEVEL_1 = 3600;/*high*/
	   /**
	    * Level 2 = MEDIUM
	    * @var int
	    */
	   const THERMOSTAT_BATTERY_LEVEL_2 = 3300;/*medium*/
	   /**
	    * Level 3 = LOW
	    * @var int
	    */
	   const THERMOSTAT_BATTERY_LEVEL_3 = 3000;/*low*/
	   /* below 3000: very low */
	}
	
	/**
	 * TimeBeforeDataExpire constants.
	 * @copy OpenSource
	 * Netatmo-API-PHP FORK
	 *
	 * @version 1.0
	 *
	 */
	class TimeBeforeDataExpire
	{
		/**
		 * Time before the thermostat is unknown.
		 * @var int
		 */
		const TIME_BEFORE_UNKNONWN_THERMOSTAT = 7200;
		/**
		 * Time before the station is unknown.
		 * @var int
		 */
	   const TIME_BEFORE_UNKNONWN_STATION = 86400;
	}
}

?>
