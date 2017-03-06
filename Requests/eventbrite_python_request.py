import requests  ##we will need to download this external module to our website.
## example of retrieving the categories from eventbrite,
## and all of its categories name
q ="""
q
sort_by
location.address
location.within
organizer.id
categories
subcategories
price
start_date.range_start
start_date.range_end
start_date.keyword
"""
q = q.strip()
q = q.split()
w = set(q)

def search_request(pargs : dict):
    #Pargs is a diction pair value that has the paramater arguement
    #This is if the user wishes to filter for things
    #If a user wishes to just search for events unfiltered, we can enter an empty dict as an argument
    global q, w
    get_request = "https://www.eventbriteapi.com/v3/events/search/?"
    for i in pargs:
        temp = "{}={}&".format(i,pargs[i])
        get_request+=temp
    headers = {        "Authorization": "Bearer 4GNQPWQGZBEJH4NZMBO6"    }
    verify = True  # Verify SSL certificate
    response = requests.get(get_request ,headers = headers, verify = verify)
    return response



def printName(a):
    for i in a['events']:
        print (i['name']['text'])

if __name__ == "__main__":
    
    query ={ "q":"food",
            "sort_by":"name",
            "location.address":"Irvine"
            }
    a = search_request(query).json()
##    printName(a)
   
    
