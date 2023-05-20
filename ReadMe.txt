- Install any missing nodes or modules.
- Run npm run dev.
- Run php artisan serve.
- After the first migration make sure to uncomment the user3 seed in the AdminSeeder
to create a new general purpose user for the front end. 
- After seeding, uncomment the /token route in the API routes and the token method in the ApiController,
then go to the /api/token route to create a token for the general user so that the front end can send 
post requests using the token in the header in each request.
- All web routes protected with Auth.
- All API routes protected with sanctum.