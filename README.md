# ZuriBoard-Tasks
API Description: Slack Info and Timestamp Endpoint

Overview:
The Slack Info and Timestamp API is a simple, publicly accessible endpoint built using PHP that provides essential information in JSON format. It serves as a valuable tool for retrieving specific details related to a user's Slack identity, the current day of the week, and accurate UTC time within a +/-2 minute window. Additionally, it offers insights into the user's chosen track and provides links to associated GitHub resources. This API is designed to facilitate quick access to pertinent information for various purposes, including integration with Slack and time-sensitive applications.

Endpoint URL:

http://example.com/api
HTTP Method:

GET
Parameters:

slack_name (string, required): The Slack username of the user, used to identify the individual.
track (string, required): The track to which the user is affiliated (e.g., "backend").
Response Format:

JSON
