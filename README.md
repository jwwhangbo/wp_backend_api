# Service orchestration using docker compose

Includes:
- Headless Wordpress CMS
- Traefik
- Watchtower
- Webserver([v2.jwwhangbo.com](https://github.com/jwwhangbo/v2.jwwhangbo.com))

Traefik is setup to handle http/https proxying and routing requests to different services based on trailing urls(e.g. admin., api.). 

watchtower monitors for changes in the docker hub repository for the webserver and rolls out changes when there is a new version available.

Hosted on Google Cloud Platform's Compute engine(E2 small).
