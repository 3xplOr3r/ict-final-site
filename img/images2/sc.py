import os

directory = '/opt/lampp/htdocs/file/homepage/images2'

files = os.listdir(directory)

image_files = [file for file in files if file.startswith('IMG') and file.endswith('.jpg')]

for filename in image_files:

    last_two_digits = filename[-6:-4]  
    new_filename = f"IMG_{last_two_digits}.jpg"  
    os.rename(os.path.join(directory, filename), os.path.join(directory, new_filename))
    print(f"Renamed {filename} to {new_filename}")
