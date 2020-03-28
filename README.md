# Customer Listing Api
A simple customer CRUD api build with Slim PHP. Used in iLista and vue-ilista projects.

#### Endpoints
Method | Description | Endpoint
------ | ----------- | --------
GET | Retrieve all customers| /api/customers              
GET | Retrieve specific customer by id| /api/customer/{id}
POST | Add a customer | /api/add/customer
PUT | Update a specific customer by id | /api/update/customer/{id}
DELETE | Delete a customer by id | /api/delete/customer/{id}