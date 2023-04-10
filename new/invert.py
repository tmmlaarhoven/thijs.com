from PIL import Image
import PIL.ImageOps    
import os

directory = os.fsencode("papers/png")
for file in os.listdir(directory):
    filename = os.fsdecode(file)
    image = Image.open(f"papers/png/{filename}")





    image = PIL.ImageOps.invert(image)


    img = image.convert("RGBA")
    datas = img.getdata()

    newData = []
    for item in datas:
        if item[0] < 5 and item[1] < 5 and item[2] < 5:
        #if item[0] > 250 and item[1] > 250 and item[2] > 250:
            newData.append((255, 255, 255, 0))
        else:
            newData.append(item)

    img.putdata(newData)
    img.save(f"papers/pnginv/{filename}", "PNG")