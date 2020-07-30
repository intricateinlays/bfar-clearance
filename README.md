# bfar-clearance

## parameter

```
{
   "company_name":"Dele Cruz Enterprises",
   "company_contact":"Juan Dela Cruz",
   "company_address":"Cebu City 6000 Philippines",
   "company_phone":"09228112233",
   "customer_name":"Maria Dela Cruz",
   "customer_address":"CA 90291 United States",
   "customer_phone":"8057112233",
   "customer_email":"maria@mailinator.com",
   "invoice_items":[
      {
         "quantity":"1",
		 "item_name": "MOP (Pinctada maxima)",
         "description":"Fashion Jewelry",
         "country_of_origin":"PHILIPPINES",
		 "weight":"1/4kg",
         "price":50
      },
      {
         "quantity":"1",
		 "item_name": "Orange Spiny (Spondylus)",
         "description":"Fashion Jewelry",
         "country_of_origin":"PHILIPPINES",
		 "weight":"1/4kg",
         "price":50
      }
   ]
}
```

### sample

```
http://bfar-clearance.intricateinlays.com/?invoice={
   "company_name":"Dele Cruz Enterprises",
   "company_contact":"Juan Dela Cruz",
   "company_address":"Cebu City 6000 Philippines",
   "company_phone":"09228112233",
   "customer_name":"Maria Dela Cruz",
   "customer_address":"CA 90291 United States",
   "customer_phone":"8057112233",
   "customer_email":"maria@mailinator.com",
   "invoice_items":[
      {
         "quantity":"1",
		 "item_name": "MOP (Pinctada maxima)",
         "description":"Fashion Jewelry",
         "country_of_origin":"PHILIPPINES",
		 "weight":"1/4kg",
         "price":50
      },
      {
         "quantity":"1",
		 "item_name": "Orange Spiny (Spondylus)",
         "description":"Fashion Jewelry",
         "country_of_origin":"PHILIPPINES",
		 "weight":"1/4kg",
         "price":50
      }
   ]
}
```

[here](http://bfar-clearance.intricateinlays.com/?invoice={%20%22company_name%22:%22Dele%20Cruz%20Enterprises%22,%20%22company_contact%22:%22Juan%20Dela%20Cruz%22,%20%22company_address%22:%22Cebu%20City%206000%20Philippines%22,%20%22company_phone%22:%2209228112233%22,%20%22customer_name%22:%22Maria%20Dela%20Cruz%22,%20%22customer_address%22:%22CA%2090291%20United%20States%22,%20%22customer_phone%22:%228057112233%22,%20%22customer_email%22:%22maria@mailinator.com%22,%20%22invoice_items%22:[%20{%20%22quantity%22:%221%22,%20%22item_name%22:%20%22MOP%20(Pinctada%20maxima)%22,%20%22description%22:%22Fashion%20Jewelry%22,%20%22country_of_origin%22:%22PHILIPPINES%22,%20%22weight%22:%221/4kg%22,%20%22price%22:50%20},%20{%20%22quantity%22:%221%22,%20%22item_name%22:%20%22Orange%20Spiny%20(Spondylus)%22,%20%22description%22:%22Fashion%20Jewelry%22,%20%22country_of_origin%22:%22PHILIPPINES%22,%20%22weight%22:%221/4kg%22,%20%22price%22:50%20}%20]%20})
