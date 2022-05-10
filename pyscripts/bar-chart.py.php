<py-script output="bar-chart">

import matplotlib.pyplot as pltx

x = ['Nuclear', 'Hydro', 'Gas', 'Oil', 'Coal', 'Biofuel']
energy = [5, 6, 15, 22, 24, 8]

x_pos = [i for i, _ in enumerate(x)]

pltx.bar(x_pos, energy, color='green')
pltx.xlabel("Energy Source")
pltx.ylabel("Energy Output (GJ)")
pltx.title("Energy output from various fuel sources")

pltx.xticks(x_pos, x)

pltx.show()

pltx
</py-script>