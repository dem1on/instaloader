import os

print("WELCOME TO THIS TOOL ")
username=input('The username of instagram : ')

print("[1] Posts (Images)")
print('[2] Posts (Videos)')
print('[3] Posts (Images + Videos)')

choice=input("What do you want download : ")


if choice == '1' :
    os.system('instaloader '+username+' --no-profile-pic --no-metadata-json --no-compress-json --no-captions --no-video-thumbnails --no-videos ')
elif choice == '2' :
    os.system('instaloader '+username+' --no-profile-pic --no-metadata-json --no-compress-json --no-captions --no-video-thumbnails --no-pictures ')
elif choice == '3' :
    os.system('instaloader '+username+' --no-profile-pic --no-metadata-json --no-compress-json --no-captions --no-video-thumbnails  ')
else:
    print('Choose one of the 3 options.')
